<?php
if($_POST){
    header('location:inicio.php');
}
?>
<!doctype html>
<html lang="es">
  <head>
  <link rel="icon" href="./imagenes/ElegidosFull.ico">
    <title>Administrador EMMC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css"/>
  </head>
  <body>
    <div class="container">
        <br />
        <center>
            <img src="../imagenes/FULLPACHT.png" width="300" height="300" alt="Full Patcht" class="img-responsive">
        </center>
        <br />
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="POST">
                        <div class = "form-group">
                        <label>Usuario</label>
                        <input type="text" class="form-control" name="usuario" placeholder="Ingresa Usuario">
                        </div>
                        <br />
                        <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="Ingresa Contraseña">
                        </div>
                        <br />
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
   
  </body>
</html>