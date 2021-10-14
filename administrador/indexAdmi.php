

<?php
	session_start();
	require_once "../servicios/_conexion.php";
	$con=con();
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Asdministrador</title>
		<link rel="stylesheet" type="text/css" href="../administrador/librerias/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../administrador/librerias/alertifyjs/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="../administrador/librerias/alertifyjs/css/themes/default.css">

		<link rel="stylesheet" type="text/svg" href="../administrador/librerias/bootstrap/fonts/glyphicons-halflings-regular.svg">

		<script type="text/javascript" src="../administrador/librerias/alertifyjs/alertify.js"></script>
		<script type="text/javascript" src="../administrador/librerias/jquery-3.6.0.min.js"></script>
		<script type="text/javascript" src="../administrador/librerias/bootstrap/js/bootstrap.js"></script>
	</head>

	<body style="background-color: green">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- navbar cabezal-->


<!--Modal de agregar-->

<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body">
        	<label>Nombre Producto</label>
        	<input type="text" name=""     id="NameProducto" class="form-control input-sm">
 
        	<label>Descripcion Producto</label>
        	<input type="" name=""         id="descripcionProduct" class="form-control input-sm">

        	<label>Precio Producto / 12.59</label>
        	<input type="text" name=""     id="PrecioProduct" class="form-control input-sm">

        	<label>Nombre de Ruta Imagen</label>
        	<input type="text" name=""     i0d="NameRtImagen" class="form-control input-sm">
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Formulario</button>
        <button type="button" class="btn btn-primary">Guardar Información</button>
      </div>
    </div>
  </div>
</div>
<br>

<!--Fin de agregarv button -->

<!--Inicio Editar button -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<label>Nombre Producto</label>
        	<input type="text" name=""     id="NameProductou" class="form-control input-sm">
 
        	<label>Descripcion Producto</label>
        	<input type="" name=""         id="descripcionProductu" class="form-control input-sm">

        	<label>Precio Producto / 12.59</label>
        	<input type="text" name=""     id="PrecioProductu" class="form-control input-sm">

        	<label>Nombre de Ruta Imagen</label>
        	<input type="text" name=""     i0d="NameRtImagenu" class="form-control input-sm">
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="actualizadatos">Actualizar</button>
      </div>
    </div>
  </div>
</div>
<!--Fin de Editar button -->

<!-- Inicio de boton Borrar -->
<div class="modal fade" id="modalBorrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin de borrar -->
<br>

	<div class="container">
		<h1 style="text-align: center">Tabla de Productos</h1>

		<div class="container">
			<caption>
	 			<button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar"> Agregar Nuevo Item
	 				<span class="glyphicon glyphicon-plus"></span>
	 			</button>
	 			<br>
	 		</caption>
	 		<br>
		</div>



<div class="row">
	 <div class="col-sm-13">
	 	<table class="table table-hover table-condensed table-bordered">

	 		
	 		<tr>
	 			<td>id</td>
	 			<td>Nombre Producto</td>
	 			<td>Descripcion Producto</td>
	 			<td>Precio Producto</td>
	 			<td>Ruta Nombre Imagen</td>
	 			<td>Editar</td>
	 			<td>Modificar</td>
	 		</tr>

	 		<?php
	 			$sql="SELECT id, nompro, despro, prepro, rutimapro
	 			from producto";

	 			$result=mysqli_query($con,$sql);
	 			while($ver=mysqli_fecth_row($result)) {
	 		?>

	 		<tr>
	 			<td><?php echo $ver[1] ?></td>
	 			<td></td>
	 			<td></td>
	 			<td></td>
	 			<td></td>

	 			<td>
	 				<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion"></button>
	 			</td>

	 			<td>
	 				<button class="btn btn-danger glyphicon glyphicon-remove" data-toggle="modal" data-target="#modalBorrar"></button>
	 			</td>
	 		</tr>
	 		<?php 
	 			}

	 		?>
	 	</table>
	 </div>
</div>
	</div>



	</body>
	</html>

	