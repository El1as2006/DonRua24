<?php
include '../../../funcs/conexion.php';

if (!isset($_GET['id_red']) || empty($_GET['id_red'])) {
    echo "ID no proporcionado o vacío.";
    exit();
}

$sql = "SELECT * FROM redes WHERE id_red = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if (!$stmt->execute()) {
    echo "Error al ejecutar la consulta: " . $stmt->error;
    exit();
}

$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $data = $result->fetch_assoc();
} else {
    echo "No se encontró ninguna red social con el ID proporcionado.";
    exit();
}
$stmt->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nombre'];
    $URL = $_POST['URL'];

    $sql = "UPDATE redes SET nombre = ?, URL = ? WHERE id_red = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $URL, $id);

    if ($stmt->execute()) {
        echo "Red Social actualizada correctamente.";
        header("Location: ../redesociales.php");
        exit();
    } else {
        echo "Error al actualizar la red social.";
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
    <title>Editar Red Social</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Editar Red Social</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Red Social</label>
                <input type="text" class="form-control" id="name" name="nombre" value="<?php echo htmlspecialchars($data['nombre']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">URL</label>
                <input type="text" class="form-control" id="url" name="URL" value="<?php echo htmlspecialchars($data['URL']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="../redesociales.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>