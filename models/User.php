<?php


// Vamos a crear el modelo Usuario para deterterminar cuales son los registros que defino. 

/*  Para esto vamos a definir una clase que servira como plantilla para el registro de cada usuarios
    es por esto que debemos definir las propiedades de nuestra Clase Usuario. 
    estas en este caso son las misma que se definen en la Tabla Usuario de nuestra Base de datos. 
*/

class User {
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $rol;
    private $imagen;
    private $db;
    
    
     function __construct(){
        
        $this->db = Database::connect(); 
    }

    // Ahora vamos a crear nuestro metodos de Encapsulamiento Getter and Setter
    function getId(){
        // return $this->db->real_escape_string($this->id); 
        return $this->id;
    }
    function getNombre(){
        // return $this->db->real_escape_string($this->nombre); 
        return $this->nombre;
    }
    function getApellido(){
        // return $this->db->real_escape_string($this->apellido); 
        return $this->apellido;
    }
    function getEmail(){
        // return $this->db->real_escape_string($this->email); 
        return $this->email;

    }
    function getPassword(){
        return password_hash ($this->db->real_escape_string($this->password),PASSWORD_BCRYPT,['cost' => 12]); 
        // return $this->password;

    }
    function getRol(){
        // return $this->db->real_escape_string($this->rol); 
        return $this->rol;

    }
    function getImagen(){
        return $this->imagen;
        // return $this->db->real_escape_string($this->imagen); 

    }

    function setId($id){
        
         $this->id=$id;

    }
    function setNombre($nombre){
        // $mysqli->real_escape_string($_POST['firstname']);
         $this->nombre= $this->db->real_escape_string($nombre);
        //  $this->nombre= $nombre;

    }
    function setApellido($apellido){
         $this->apellido= $this->db->real_escape_string($apellido);
        //  $this->apellido= $apellido;

    }
    function setEmail($email){
         $this->email= $this->db->real_escape_string($email);
        //  $this->email= $email;

    }
    function setPassword($password){
        // password_hash("test", PASSWORD_BCRYPT, ["cost" => $cost]);
        //  $this->password = password_hash($this->db->real_escape_string($password),PASSWORD_BCRYPT, ["cost" => 12]);
         $this->password= $password;

    }
    function setRol($rol){
        $this->rol= $this->db->real_escape_string($rol);
        // $this->rol= $rol;

    }
    function setImagen($imagen){
         $this->imagen= $this->db->real_escape_string($imagen);
        //  $this->imagen= $imagen;

    }

    public function save(){
        // Defino la consulta para guardar mi archivo
        $consulta= "INSERT INTO usuarios VALUES (NULL, '{$this->getNombre()}', '{$this->getApellido()}','{$this->getEmail()}','{$this->getPassword()}','user',null)";
        $registar= $this->db->query($consulta);
        // Determino si  el proceso de registro va bien 
        $result=false; 
        if($registar){
            $result=true;
        }
        return $result; 
    }

    // public function login($email,$password){
    public function login(){
        $result=false;
        // $email=$this->getEmail();
        // $password=$this->getPassword(); 
        $email=$this->email;
        $password=$this->password; 
//  Comprobar si existe el usuario
        // $query= "SELECT id FROM usuarios WHERE email='$email'"; 
        $sql= "SELECT * FROM usuarios WHERE email='$email'"; 
        $login = $this->db->query($sql);

        // Verificamos si exite el login y si la consulta devuelve un registro
        $cantregistro= $login->num_rows;

        if($login && $cantregistro==1 ){
            // Se usa para sacar el objeto  
            $usuario= $login->fetch_object();

            // Verificar password
            $verify=password_verify($password, $usuario->password);
            if($verify){
                $result= $usuario;
            }

        }
        return $result; 

    }


    
}