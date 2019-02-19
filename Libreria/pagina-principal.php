<!DOCTYPE html>
<html>
<head>
	<title>Libreria</title>
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
      #foto {
        width:70px; height:120px;
      }
    </style>
<body>
	<?php 
		include 'header-principal.html';
	 ?>

	<div id="banner">
		<img id="banner-inicio" src="img/banner.png">

	</div>
	<br>
	<hr id="hr"/>
<br>
<br>
	<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#productos">Productos</a></li>
    <li><a data-toggle="tab" href="#Libros">Libros</a></li>
    <li><a data-toggle="tab" href="#Papeleria">Papeleria</a></li>
    <li><a data-toggle="tab" href="#Estudiantes">Estudiantes</a></li>
    <li><a data-toggle="tab" href="#Oficina">Oficina</a></li>
  </ul>

<
  <div class="tab-content">
    <div id="productos" class="tab-pane fade in active">
      <br>
       <?php include 'productos.php'; ?>
    </div>
    <div id="Libros" class="tab-pane fade">
      <br>
       <?php include 'libros.php'; ?>
    </div>
    <div id="Papeleria" class="tab-pane fade">
      <br>
      <?php include 'Papeleria.php'; ?>
    </div>
    <div id="Estudiantes" class="tab-pane fade">
      <br>
     <?php include 'Estudiantes.php'; ?>
    </div>
    <div id="Oficina" class="tab-pane fade">
      <br>
      <?php include 'Oficina.php'; ?>
    </div>
    
  </div>
<br>
<br>
<br>
<br>

	 <?php 
	 	include 'footer.html';
	 ?>
</body>
</html>