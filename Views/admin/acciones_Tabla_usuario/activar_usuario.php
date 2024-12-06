<?php
include '../../../funcs/conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Actualiza el estado del usuario a "1" (Activo)
    $sql = "UPDATE usuarios SET user_type = 0 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Usuario activado correctamente.";
        header("Location: ../users.php"); // Redirige de vuelta a la lista de usuarios
        exit();
    } else {
        echo "Error al activar el usuario.";
    }
    $stmt->close();
}
$conn->close();
?>
