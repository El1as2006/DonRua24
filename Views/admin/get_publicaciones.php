<?php
include '../../funcs/conexion.php'; // Conexión a la base de datos

$query = "SELECT id, titulo, contenido, imagen, Tipo_Publicaciones, activo FROM publicaciones";
$result = $conn->query($query);

$publicaciones = [];

// Ruta base de las imágenes
$imageBasePath = '../uploads/'; // Asegúrate de que esta ruta sea correcta

while ($row = $result->fetch_assoc()) {
    // Si la imagen existe en la base de datos, usa la ruta completa; si no, usa placeholder.png
    if (!empty($row['imagen']) && file_exists("../uploads/" . $row['imagen'])) {
        $row['imagen'] = $imageBasePath . $row['imagen'];
    } else {
        $row['imagen'] = $imageBasePath . 'placeholder.png';
    }

    // Agrupar publicaciones por Tipo_Publicaciones
    $publicaciones[$row['Tipo_Publicaciones']][] = $row;
}

header('Content-Type: application/json');
echo json_encode($publicaciones);

$conn->close();
?>
