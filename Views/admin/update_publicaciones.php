<?php
include '../../funcs/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $currentImage = $_POST['current_image']; // Imagen actual

    // Manejar la nueva imagen
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageName = time() . "_" . $_FILES['image']['name']; // Generar un nombre único
        $imagePath = "../uploads/" . $imageName;

        // Mover la imagen al directorio de subida
        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
            $image = $imageName; // Usar la nueva imagen
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al subir la imagen.']);
            exit;
        }
    } else {
        $image = !empty($currentImage) ? $currentImage : "placeholder.png"; // Conservar actual o usar predeterminada
    }

    // Actualizar la publicación en la base de datos
    $query = "UPDATE publicaciones SET titulo = ?, contenido = ?, imagen = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssi", $title, $content, $image, $id);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al actualizar la publicación.']);
    }

    $stmt->close();
    $conn->close();
}
?>
