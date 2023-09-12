<!doctype html>
<html lang="es">
  <head>
    <link rel="icon" href="../imagenes/ElegidosFull.ico">
    <title>Administrador EMMC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css"/>
  </head>
  <body>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/elegidosmexicoMC" ?>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Administrador de Miembros EMMC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo $url;?>/administracion/inicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url;?>/administracion/seccion/miembros.php">Miembros</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url;?>/administracion/seccion/motos.php">Motos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url;?>/administracion/seccion/contactos.php">Contactos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url;?>/administracion/seccion/cerrar.php">Cerrar Sesion</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <br />
        <br />
        <div class="row">