<?php
$host = 'localhost';
$usuario = 'root';      // o el usuario que creaste en MySQL
$contrasena = 'root';       // pon la contraseña si tiene
$bd = 'crud_php';

$conn = new mysqli($host, $usuario, $contrasena, $bd);

if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}
?>
