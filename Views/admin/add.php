<?php
require_once '../../funcs/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sector = $_POST['sector'];

    // Verificar cuántas publicaciones ya existen para cada sector
    if ($sector == 0) {
        $checkSql = "SELECT COUNT(*) AS count FROM publicaciones WHERE Tipo_publicaciones = 0";
        $checkResult = $conn->query($checkSql);
        $row = $checkResult->fetch_assoc();
        if ($row['count'] >= 2) {
            echo "<script>alert('Solo se permiten 2 imágenes para el sector Tipo_publicaciones = 0'); window.history.back();</script>";
            exit;
        }
    } elseif ($sector == 1) { // Validación para Tipo_publicaciones = 1
        $checkSql = "SELECT COUNT(*) AS count FROM publicaciones WHERE Tipo_publicaciones = 1";
        $checkResult = $conn->query($checkSql);
        $row = $checkResult->fetch_assoc();
        if ($row['count'] >= 5) {
            echo "<script>alert('Solo se permiten 5 imágenes para el sector Tipo_publicaciones = 1'); window.history.back();</script>";
            exit;
        }
    }elseif ($sector == 2) { // Validación para Tipo_publicaciones = 2
        $checkSql = "SELECT COUNT(*) AS count FROM publicaciones WHERE Tipo_publicaciones = 2";
        $checkResult = $conn->query($checkSql);
        $row = $checkResult->fetch_assoc();
        if ($row['count'] >= 3) {
            echo "<script>alert('Solo se permiten 3 imágenes para el sector Tipo_publicaciones = 2'); window.history.back();</script>";
            exit;
        }
    }elseif ($sector == 3) {
        $checkSql = "SELECT COUNT(*) AS count FROM publicaciones WHERE Tipo_Publicaciones = 3";
        $checkResult = $conn->query($checkSql);
        $row = $checkResult->fetch_assoc();
        if ($row['count'] >= 6) {
            echo "<script>alert('Solo se permiten 6 imágenes para el sector Tipo_Publicaciones = 3'); window.history.back();</script>";
            exit;
        }
    }elseif ($sector == 4) {
        $checkSql = "SELECT COUNT(*) AS count FROM publicaciones WHERE Tipo_Publicaciones = 4";
        $checkResult = $conn->query($checkSql);
        $row = $checkResult->fetch_assoc();
        if ($row['count'] >= 4) {
            echo "<script>alert('Solo se permiten 4 imágenes para el sector Tipo_Publicaciones = 4'); window.history.back();</script>";
            exit;
        }
    }

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
                $sql = "INSERT INTO publicaciones (titulo, contenido, imagen, Tipo_publicaciones) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssi", $title, $content, $fileName, $sector);

                if ($stmt->execute()) {
                    echo "<script>alert('Publicación creada exitosamente'); window.location.href='publicaciones.php';</script>";
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
