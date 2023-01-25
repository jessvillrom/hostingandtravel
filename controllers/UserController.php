<?php
/* Hago el llamado de mi modelo */
require_once('models/User.php');
require_once 'config/parameters.php';


/*  Se encargara de la gestion de usuarios */

class UserController {

    public function index(){
        // echo "Controlador Usuario , Index"; 
        require('views/index.php'); 
        
    }  
    public function  login(){

        require('views/login.php'); 
    }
    public function loginx(){

        if(isset($_POST)){

            $usuario= new User();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            // Identificar el usuario
            $identity= $usuario -> login(); 
            // Consulta a la base de datos en el modelo

            // var_dump($identity); 
            // die();
// Si el usuario esta identificado  y identity es un objecto 
            if($identity && is_object($identity)){

                $_SESSION['identity']=$identity;

                // Creamos una sesion par a identificar si el usuario es administrador
                if($identity->role == 'admin'){
                    $_SESSION['admin']=true; 
                }

            }else{
                $_SESSION['error_sesion']='Identificación Fallida'; 

            }
            // Crear una sesion

        }
        header("Location:".base_url); 

    }

    public function logout(){
       if(isset($_SESSION['identity'])){
        unset($_SESSION['identity']); 
       }
       
       if(isset($_SESSION['admin'])){
        unset($_SESSION['admin']); 
       }

       header("Location:".base_url); 
    }

    public function registrar(){
        // echo "Controlador Usuario , Index"; 
        require_once ('views/registro.php'); 
        
    } 
    
    public function save(){
        if(isset($_POST)){
            /* Validar datos  */
            $nombre= isset($_POST['nombre'])?$_POST['nombre']: false; 
            $apellido =isset($_POST['apellido'])?$_POST['apellido']:false;
            $email= isset($_POST['email'])?$_POST['email']:false;
            $password=isset($_POST['password'])?$_POST['password']:false;



            /* Fin Validar */
            // var_dump($_POST);

            /* Se hace una validacion basica con el fin de verificar si los datos estan llegando por POST  */
            if($nombre && $apellido && $email &&  $password){
                $usuario=new User();
                $usuario->setNombre($_POST['nombre']);
                $usuario->setApellido($_POST['apellido']);
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);
                $save=$usuario->save();
                if($save){
                    $_SESSION['register']="complete";
                    // echo "Registro completado";
                }else{
                    $_SESSION['register']="failed";
                    // echo "Registro Fallido";
                }
                
                // var_dump($usuario); 
                
             }
             else{
                $_SESSION['register'] = "failed";
             }
        }
        
        else{
            $_SESSION['register']="failed";
        }

        // header("Location:".base_url."user/registrar");
        header("Location:".base_url."User/registrar");
        
    }

    public function verusuario(){

        // Definir el listado de usuaario
    }

    


}
