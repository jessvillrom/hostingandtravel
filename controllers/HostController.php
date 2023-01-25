<?php

/*   
Gestion : Registro, Edicion, eliminacion y lectura 
Se encargara de la gestion de los alojamientos */

class HostController {

    public function index(){
         require_once('views/index.php'); 
        }
        
        

        




        
    public function rutas(){
            
            require_once('views/rutas.php'); 
        

    }
        
    public function fauna(){
            
            require_once('views/fauna.php'); 
        

    }
    public function tranquilandia(){
            
            require_once('views/tranquilandia.php'); 
        

    }
    public function caminos(){
            
            require_once('views/caminos.php'); 
        

    }
    public function mapas(){
        require_once('views/mapas.php'); 
    }



}
