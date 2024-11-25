<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
// Incluir el archivo de conexión
$conn = require '../../../funcs/conexion.php';


// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validar que las contraseñas coincidan
    if ($password !== $confirm_password) {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Las contraseñas no coinciden',
                    confirmButtonText: 'OK'
                });
              </script>";
    } else {
        // Encriptar la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $user_type = 1; // Asignar el tipo de usuario, puedes cambiarlo si es necesario

        // Preparar la consulta SQL
        $sql = "INSERT INTO usuarios (name, lastname, email, pass, user_type)
                VALUES ('$name', '$lastname', '$email', '$hashed_password', '$user_type')";

        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Registro exitoso',
                        text: 'Cuenta creada correctamente',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '../login/Login.php';
                        }
                    });
                  </script>";
        } else {
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No se pudo registrar el usuario. Error: " . $conn->error . "',
                        confirmButtonText: 'OK'
                    });
                  </script>";
        }
    }
}
?>
