<?php 


class Persona 
{
	public $nombre;
	public $apellido;
	public $edad;

/*	function __construct($nombre,$apellido,$edad)
	{
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->edad = $edad;
	}*/

	function setNombre($nombre){
	 $this->nombre = $nombre;
	}

	function getNombre(){
		return $this->nombre;
	}

	function setApellido($apellido){
	 $this->apellido = $apellido;
	}

	function getApellido(){
		return $this->apellido;
	}


	function setEdad($edad){
	 $this->edad = $edad;
	}

	function getEdad(){
		return $this->edad;
	}

	
}
