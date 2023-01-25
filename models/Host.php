<?php

class Host
{

    private $id;
    private $categoria_id; // Llave foranea
    private $nombreHosp;
    private $descripcion;
    private $precio;
    private $municipio;
    private $direccion;
    private $cantidadPersonas;
    private $indicacion;
    private $imagen;


    function __construct()
    {

        $this->db = Database::connect();
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getCategoria_id()
    {
        return $this->categoria_id;
    }

 
    public function setCategoria_id($categoria_id)
    {
        $this->categoria_id = $categoria_id;

        return $this;
    }


    public function getNombreHosp()
    {
        return $this->nombreHosp;
    }


    public function setNombreHosp($nombreHosp)
    {
        $this->nombreHosp = $nombreHosp;

        return $this;
    }

 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

  
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }


    public function getPrecio()
    {
        return $this->precio;
    }


    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    public function getMunicipio()
    {
        return $this->municipio;
    }

  
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }



    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

 
    public function getCantidadPersonas()
    {
        return $this->cantidadPersonas;
    }

  
    public function setCantidadPersonas($cantidadPersonas)
    {
        $this->cantidadPersonas = $cantidadPersonas;

        return $this;
    }
 
    public function getIndicacion()
    {
        return $this->indicacion;
    }

 
    public function setIndicacion($indicacion)
    {
        $this->indicacion = $indicacion;

        return $this;
    }
 
    public function getImagen()
    {
        return $this->imagen;
    }

 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }
}
