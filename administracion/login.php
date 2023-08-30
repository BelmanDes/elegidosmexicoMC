<?php
include("../paginas/php/includes/conexion.php");

/* @var $_POST type */
$usuario = $_POST['usuario'];
$pass = $_POST['password'];
if ($usuario == '') {
    echo "Debe ingresar su usuario";
} else if ($pass == '') {
    echo "Debe ingresar su contraseña";
} else {
    /* La busqueda en la base de datos se realiza de este modo para evitar las inyecciones sql */
    $query = ("SELECT COUNT(usuario) FROM cat_usuarios WHERE usuario like '$usuario' and password like '$pass'");
    $result = mysql_query($query);
 
    if ($result <> null) {
        echo header ("Location: ../paginas/html/admin.html");
    } else {
        echo 'usuario o contraseña incalidos';
    }
}
?>