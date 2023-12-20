<?php
$servidor = 'mysql:host=localhost;id21602420_elegidosmexicomc';
$usuario = 'id21602420_belman';
$password = 'Lobg850929@';

try {
    $conn = new PDO($servidor, $usuario, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión OK con PDO";
} catch (PDOException $e) {
    echo "Conexión fallida - ERROR de conexión: " . $e->getMessage();
}
?>
