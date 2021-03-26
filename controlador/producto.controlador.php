<?php 
require_once "../../modelo/producto.modelo.php";

class ProductoControlador
{
	
	static public function agregar()
	{	$url='http://localhost/basicophp/vista/producto/';
		if (isset($_POST['nombre'])) {
			$data = array();
			$data['categoria_id']=$_POST['categoria_id'];
			$data['nombre']=$_POST['nombre'];
			$data['precio']=$_POST['precio'];
			ProductoModelo::agregar($data);
			echo "<script> location='".$url."'; </script>";
		}
	}
	static public function actualizar()
	{	$url='http://localhost/basicophp/vista/producto/';
		if (isset($_POST['nombre'])) {
			$data = array();
			$data['categoria_id']=$_POST['categoria_id'];
			$data['nombre']=$_POST['nombre'];
			$data['precio']=$_POST['precio'];
			$data['id']=$_POST['id'];
			ProductoModelo::actualizar($data);
			echo "<script> location='".$url."'; </script>";
		}
	}
	static public function eliminar()
	{	$url='http://localhost/basicophp/vista/producto/';
		if (isset($_GET['id'])) {
			ProductoModelo::eliminar($_GET['id']);
			echo "<script> location='".$url."'; </script>";
		}
	}
	static public function Listar()
	{
		return ProductoModelo::listar();
	}

	static public function mostrar()
	{
			if (isset($_GET['id'])) {
			return	ProductoModelo::mostrar($_GET['id']);
		}
	}

}