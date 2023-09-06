<!doctype html>
<html lang="es">
  <head>
    <link rel="icon" href="../imagenes/ElegidosFull.ico">
    <title>Administrador EMMC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/elegidosmexicoMC" ?>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador de Miembros EMMC<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administracion/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administracion/seccion/miembros.php">Miembros</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administracion/seccion/motos.php">Motos</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administracion/seccion/contactos.php">Contactos</a>
            <a class="nav-item nav-link" href="#">Cerrar Sesion</a>
        </div>
    </nav>
    </nav>
    <div class="container">
        <br />
        <br />
        <div class="row">
            <div class="col-md-12">