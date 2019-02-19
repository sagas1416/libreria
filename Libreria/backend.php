<!DOCTYPE html>
<html>
<head>
	<title>Libreria</title>
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="css/styleb.css"> 
<script type="text/javascript" src="js/back.js"></script>
    
    <style type="text/css">
      #foto {
        width:70px; height:120px;
      }
    </style>
<body>
	<?php 
		include 'header-principal.html';
	 ?>
	<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><a data-toggle="tab" href="#Ventas">Inicio</a></li>
          <li><a data-toggle="tab" href="#Empleados">Empleados</a></li>
          <li><a data-toggle="tab" href="#Clientes">Clientes</a></li>
          <li><a data-toggle="tab" href="#Pedidos">Pedidos(52)</a></li>
          <li><a data-toggle="tab" href="#Ventas">Ventas</a></li>
          <li><a data-toggle="tab" href="#Compras">Compras</a></li>
          <li><a data-toggle="tab" href="#Catalogo">Catalogo</a></li>
          <li><a data-toggle="tab" href="#Configuracion">Configuracion</a></li>
      </ul>

              <div class="tab-content">
                <div id="Ventas" class="tab-pane fade in active">
                  <br>
                   <?php include 'Ventas.php'; ?>
                </div>
                <div id="Empleados" class="tab-pane fade">
                  <br>
                   <?php include 'Empleados.php'; ?>
                </div>
                <div id="Clientes" class="tab-pane fade">
                  <br>
                  <?php include 'Clientes.php'; ?>
                </div>
                <div id="Pedidos" class="tab-pane fade">
                  <br>
                 <?php include 'Pedidos.php'; ?>
                </div>
                <div id="Ventas" class="tab-pane fade">
                  <br>
                  <?php include 'Ventas.php'; ?>
                </div>
                 <div id="Compras" class="tab-pane fade">
                  <br>
                  <?php include 'Compras.php'; ?>
                </div>
                 <div id="Catalogo" class="tab-pane fade">
                  <br>
                  <?php include 'Catalogo.php'; ?>
                 </div> 
                </div> <div id="Configuracion" class="tab-pane fade">
                  <br>
                  <?php include 'Configuracion.php'; ?>
                </div>
                </div>

              </div>

  </div>

</nav>
<div class="main">
<!-- Content Here -->
</div>
 
</div><br><br><br><br><br><br>
   
	
</body>

</html>