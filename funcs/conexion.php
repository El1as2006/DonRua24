<?php
$host = "localhost";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "domingosavio";

// Crear conexión
$conn = new mysqli($host, $usuario, password: $contrasenia, database: $base_de_datos);

// Verificar conexión
if ($conn->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
    exit();
}

// Retornar la conexión para utilizarla en otros archivos
return $conn;
?>
