<?php
include '../../../funcs/conexion.php';

// Verifica si se pasó un ID válido
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtén los datos del usuario a editar
    $sql = "SELECT id, name, lastname, username, email FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
    } else {
        echo "Usuario no encontrado.";
        exit();
    }
    $stmt->close();
}

// Procesa el formulario si se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    

    // Actualiza los datos del usuario
    $sql = "UPDATE usuarios SET name = ?, lastname = ?, username = ?, email = ?  WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $name, $lastname, $username, $email,  $id);

    if ($stmt->execute()) {
        echo "Usuario actualizado correctamente.";
        header("Location: ../users.php"); // Redirige de vuelta a la lista de usuarios
        exit();
    } else {
        echo "Error al actualizar el usuario.";
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Editar Usuario</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="users.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
