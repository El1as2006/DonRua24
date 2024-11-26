<?php
require_once '../../funcs/conexion.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sector = $_POST['sector']; 

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
                
                $sql = "INSERT INTO publicaciones (titulo, contenido, imagen, Tipo_publicaciones) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssi", $title, $content, $fileName, $sector);

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
