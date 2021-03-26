<?php 
require_once('conexion.php');
class CategoriaModelo
{
	static public function agregar($data)
	{
		$stmt = Conexion::Conectar()->prepare("INSERT INTO categoria(nombre) VALUES (:nombre)");

		$stmt->bindParam(":nombre", $data["nombre"], PDO::PARAM_STR);

		if($stmt->execute()){

			return 1;

		}else{

			return 0;
		
		}

		$stmt->close();
		$stmt = null;
	}

	static public function actualizar($data)
	{
		$stmt = Conexion::Conectar()->prepare("UPDATE categoria SET nombre=:nombre WHERE id=:id");

		$stmt->bindParam(":nombre", $data["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $data["id"], PDO::PARAM_STR);
		if($stmt->execute()){
			return 1;
		}else{
			return 0;
		}

		$stmt->close();
		$stmt = null;
		
	}

	static public function listar()
	{
	
		$stmt = Conexion::Conectar()->prepare("SELECT * FROM categoria");

		$stmt -> execute();

		return $stmt -> fetchAll();
		
		$stmt -> close();
		
		$stmt = null;
	}

	static public function eliminar($id)
	{
		$stmt = Conexion::Conectar()->prepare("DELETE FROM categoria WHERE id = :id");
		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);

		if($stmt -> execute()){
			return 1;		
		}else{
			return 0;	
		}

		$stmt -> close();

		$stmt = null;
	}

	static public function mostrar($id)
	{
		$stmt = Conexion::Conectar()->prepare("SELECT * FROM categoria WHERE id = :id");

			$stmt -> bindParam(":id", $id, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

			$stmt -> close();
			
			$stmt = null;
	}
	
}
