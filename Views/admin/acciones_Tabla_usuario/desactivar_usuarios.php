<?php
include '../../funcs/conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para obtener el tipo de usuario antes de desactivarlo
    $sql = "SELECT user_type FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Verifica si el usuario es Administrador
        if ($user['user_type'] == 1) {
            echo "No se puede desactivar un Administrador.";
            header("Refresh: 3; URL=../users.php"); // Redirige después de 3 segundos
            exit();
        }

        // Si no es Administrador, cambia su estado a "Desactivado"
        $sql = "UPDATE usuarios SET user_type = 2 WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Usuario desactivado correctamente.";
            header("Location: ../users.php"); // Redirige a la lista de usuarios
            exit();
        } else {
            echo "Error al desactivar el usuario.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    $stmt->close();
} else {
    echo "ID de usuario no especificado.";
}

$conn->close();
?>
