<?php 
require_once "../../modelo/categoria.modelo.php";

class CategoriaControlador
{
	
	static public function agregar()
	{	$url='http://localhost/basicophp/vista/categoria/';
		if (isset($_POST['nombre'])) {
			$data = array();
			$data['nombre']=$_POST['nombre'];
			CategoriaModelo::agregar($data);
			echo "<script> location='".$url."'; </script>";
		}
	}
	static public function actualizar()
	{	$url='http://localhost/basicophp/vista/categoria/';
		if (isset($_POST['nombre'])) {
			$data = array();
			$data['nombre']=$_POST['nombre'];
			$data['id']=$_POST['id'];
			CategoriaModelo::actualizar($data);
			echo "<script> location='".$url."'; </script>";
		}
	}
	static public function eliminar()
	{	$url='http://localhost/basicophp/vista/categoria/';
		if (isset($_GET['id'])) {
			CategoriaModelo::eliminar($_GET['id']);
			echo "<script> location='".$url."'; </script>";
		}
	}
	static public function Listar()
	{
		return CategoriaModelo::listar();
	}

	static public function mostrar()
	{
			if (isset($_GET['id'])) {
			return	CategoriaModelo::mostrar($_GET['id']);
		}
	}

}