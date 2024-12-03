<?php
include '../../funcs/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $currentStatus = $_POST['current_status'];

    // Cambiar el estado de la publicación
    $newStatus = $currentStatus == 1 ? 0 : 1;

    $query = "UPDATE publicaciones SET activo = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $newStatus, $id);

    if ($stmt->execute()) {
        // Redireccionar de vuelta al editor después de actualizar el estado
        header("Location: publicaciones.php");
    } else {
        echo "Error al cambiar el estado de la publicación.";
    }

    $stmt->close();
    $conn->close();
}
?>

////******************** */