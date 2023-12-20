<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./imagenes/ElegidosFull.ico">
        <title>ELEGIDOS MEXICO MC</title>
        <link rel="stylesheet" href="./css/bootstrap.css"/>
    </head>
    <body>
    <?php $url="http://".$_SERVER['HTTP_HOST']."" ?>
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="administracion/index.php">ELEGIDOS M&Eacute;XICO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link"  href="<?php echo $url;?>/index.php">Inicio
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $url;?>/nosotros.php">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $url;?>/miembros.php">Miembros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $url;?>/mesaDirectiva.php">Mesa Directiva</a>
                        </li>
                        <li class="nav-item">
                            <span class="glyphicon glyphicon-envelope"></span><a class="nav-link" href="<?php echo $url;?>/contactanos.php">Contactanos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-sm-2" type="search" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <br />
        <br />
        <div class="container">
            <br />
            <center>
                <img src="imagenes/FULLPACHT.png" width="300" height="300" alt="Full Patcht" class="img-responsive">
            </center>
            <br />