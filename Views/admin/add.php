<?php
require_once '../../funcs/conexion.php'; // Ajusta la ruta según tu estructura

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Verificar y procesar la imagen subida
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $uploadDir = '../uploads/'; // Carpeta de destino
        $fileName = basename($_FILES['image']['name']);
        $uploadFile = $uploadDir . $fileName;

        // Validar el tipo de archivo
        $fileType = pathinfo($uploadFile, PATHINFO_EXTENSION);
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array(strtolower($fileType), $allowedTypes)) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                // Guardar en la base de datos
                $sql = "INSERT INTO publicaciones (titulo, contenido, imagen) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $title, $content, $fileName);

                if ($stmt->execute()) {
                    echo "<script>alert('Publicación creada exitosamente'); window.location.href='index.php';</script>";
                } else {
                    echo "<script>alert('Error al guardar la publicación'); window.history.back();</script>";
                }
                $stmt->close();
            } else {
                echo "<script>alert('Error al subir la imagen'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('Tipo de archivo no permitido'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Error al procesar la imagen'); window.history.back();</script>";
    }
    $conn->close();
} else {
    echo "<script>alert('Método de solicitud no permitido'); window.history.back();</script>";
}
?>
