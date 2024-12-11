<?php
include '../../funcs/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $URL = $_POST['url'];

    if (filter_var($URL, FILTER_VALIDATE_URL)) {

        $sql = "INSERT INTO redes SET nombre = ?, URL = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $name, $URL);

        if ($stmt->execute()) {
            echo "Red Social agregada correctamente.";
            header("Location: redesociales.php");
            exit();
        } else {
            echo "Error al agregar la URL.";
        }
        $stmt->close();

    } else {
        echo "La URL no es válida";
        header("Location: rednueva.php");
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Red Social</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Añadir Nueva Red Social</h1>
        <form action="rednueva.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Red Social</label>
                <div class="mb-3">
                    <select id="name" name="name" class="form-label">
                        <option value="Instagram">Instagram</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Twitter">X</option>
                    </select>
                </div>      
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Link/URL</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Link Red Social" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
            <a href="redesociales.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>

</html>