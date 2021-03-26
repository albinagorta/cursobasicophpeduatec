<?php 
require_once "../../controlador/categoria.controlador.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crear nuevo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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

	<div class="content">
		<div class="row">
	
		<div class="col-sm-12">
		<center>
			<form action="" method="POST">
			<br>
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
		    <div class="col-sm-5">
		      <input type="text"  class="form-control" name="nombre">
		    </div>
		  </div>
		  <div class="form-group row">
		    <div class="col-sm-10">
		      <button type="submit" class="btn btn-success">Agregar</button>
		      <a href="http://localhost/basicophp/vista/categoria/" class="btn btn-danger">Cancelar</a>
		    </div>
		  </div>
		</form>	
		</center>
		</div>
		</div>
	</div>
	
</body>
</html>
<?php 
CategoriaControlador::agregar();
 ?>