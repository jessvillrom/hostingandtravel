
<?php
session_start();
ob_start();
// Se encarga de 

// Cargo el autoload parar tener acceso a todos los controladores
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php'; 
require_once 'views/cabecera.php';

// Aunque lo recomendable llamar la base de datos solo cuando se necesite
$db= Database::connect(); 



// Defino si el controlador existe y paso el nombre del controlador por el metodo GET desde la URL
if (isset($_GET['controller'])){
    $nombre_controlador=$_GET['controller'].'Controller';
  
}
elseif(!isset($_GET['controller']) && !isset($_GET['action']) ){
    $nombre_controlador= controller_default; 

}
else{
        // echo (1);
        $error=new ErrorController();
        $error->index(); 
        exit(); 
}



// La variable nombre_controlador 

if (class_exists($nombre_controlador)){
    
    $controlador= new $nombre_controlador;


    // Compruebar si exite 
    // Una forma de definir una vista mas dinamica 
    if(isset($_GET['action']) && method_exists($controlador,$_GET['action'])){
        $action=$_GET['action'];
        $controlador->$action();
    

    }
    elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
   
        $action_default=action_default; 
        $controlador->$action_default();
    

    }

    else { 
        // echo (2);

            $error=new ErrorController();
            $error->index(); 
    } 

}   
else {
    
    // echo "<h1>No existe estas dirección controller </h1>";
        $error=new ErrorController();
        $error->index(); 

}

// Tambien puedo crear una funcion para mostrar el error.

require_once 'views/footers.php';
ob_end_flush();
