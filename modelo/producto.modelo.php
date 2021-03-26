<?php 
require_once('conexion.php');
class ProductoModelo
{
	static public function agregar($data)
	{
		$stmt = Conexion::Conectar()->prepare("INSERT INTO producto(categoria_id,nombre,precio) VALUES (:categoria_id,:nombre,:precio)");

		$stmt->bindParam(":categoria_id", $data["categoria_id"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $data["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $data["precio"], PDO::PARAM_STR);

		
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
		$stmt = Conexion::Conectar()->prepare("UPDATE producto SET categoria_id=:categoria_id,nombre=:nombre,precio=:precio WHERE id=:id");

		$stmt->bindParam(":categoria_id", $data["categoria_id"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $data["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $data["precio"], PDO::PARAM_STR);
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
	
		$stmt = Conexion::Conectar()->prepare("SELECT P.*,C.nombre AS categoria FROM producto AS P INNER JOIN categoria AS C ON C.id=P.categoria_id");

		$stmt -> execute();

		return $stmt -> fetchAll();
		
		$stmt -> close();
		
		$stmt = null;
	}

	static public function eliminar($id)
	{
		$stmt = Conexion::Conectar()->prepare("DELETE FROM producto WHERE id = :id");
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
		$stmt = Conexion::Conectar()->prepare("SELECT * FROM producto WHERE id = :id");

			$stmt -> bindParam(":id", $id, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

			$stmt -> close();
			
			$stmt = null;
	}
	
}
