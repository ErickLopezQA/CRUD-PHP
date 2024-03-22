<?php
// Definir los datos de conexión
$servidor = "localhost";
$db = "phpcrud";
$username = "root";
$password = "";

try {
    // Crear una nueva instancia de PDO para conectarse a la base de datos
    $conexion = new PDO("mysql:host=$servidor;dbname=$db", $username, $password);

    // Establecer el modo de error de PDO a excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Opcional: establecer el juego de caracteres a UTF-8
    $conexion->exec("set names utf8");
} catch (PDOException $e) {
    // Capturar y mostrar cualquier error de conexión
    echo "Error de conexión: " . $e->getMessage();
}
?>