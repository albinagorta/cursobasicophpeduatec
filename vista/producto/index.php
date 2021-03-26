<?php 
require_once('../../controlador/producto.controlador.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<div class="content">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <a class="navbar-brand" href="#">Menu</a>
		    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" href="http://localhost/basicophp/vista/categoria/">Categoria</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="http://localhost/basicophp/vista/producto/">Producto</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
		 <div class="mb-12 row">
		    <div class="col-sm-10">
		    	<br>
		    <center>
		    	 <a href="http://localhost/basicophp/vista/producto/create.php" class="btn btn-primary">Agregar</a>
		    </center>
		    <br>
		    </div>
		  </div>
		<div  class="row">
			<div class="col-sm-12">
						<center>
							<table class="table" style="width: 70%;">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Nombre</th>
						      <th scope="col">precio</th>
						      <th scope="col">categoria</th>
						      <th scope="col">Opciones</th>
						    </tr>
						  </thead>
						  <tbody>
						  		<?php 
						  		$producto=ProductoControlador::Listar();
						  		foreach ($producto as  $cat) {
						  	echo '<tr>
								      <th scope="row">'.$cat['id'].'</th>
								      <td>'.$cat['nombre'].'</td>
								      <td>'.$cat['precio'].'</td>
								      <td>'.$cat['categoria'].'</td>
								       <td>
								       	<a href="http://localhost/basicophp/vista/producto/edit.php?id='.$cat['id'].'" class="btn btn-info">Editar</a>
								        <a href="?id='.$cat['id'].'" class="btn btn-danger">Eliminar</a>
								    </td>
								    </tr>';
						  		}
						  		 ?>
						    
						  </tbody>
					</table>
					</center>
			</div>
		</div>
	</div>
	
</body>
</html>

<?php 
$produ=new ProductoControlador();
$produ->eliminar();
 ?>