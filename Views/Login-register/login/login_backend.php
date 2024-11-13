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
session_start();

$conn = include '../../../funcs/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Corregir los parámetros en mysqli_real_escape_string
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    if (empty($email) || empty($password)) {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Please fill in all fields',
                    confirmButtonText: 'OK'
                });
              </script>";
    } else {
        $sql = "SELECT * FROM usuarios WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Corregir los parámetros en password_verify
            if (password_verify($password, $row['pass'])) {
                $_SESSION['email'] = $email;
                $_SESSION['user_type'] = $row['user_type'];
                
                // Redirección basada en el tipo de usuario
                if ($row['user_type'] == 1) {
                    header("Location: ../../admin/admin.php"); // Cambia la ruta al formulario específico
                    exit();
                } else {
                    header("Location: ../../admin/admin2.php"); // Cambia la ruta al panel de administración o la ruta deseada
                    exit();
                }
            } else {
                echo "<script>
                        Swal.fire({
                            icon: 'warning',
                            title: 'Wrong Password',
                            text: 'Please check your password',
                            confirmButtonText: 'Close'
                        });
                      </script>";
            }
        } else {
            echo "<script>
                    Swal.fire({
                        icon: 'warning',
                        title: 'Non-existent User',
                        text: 'This user does not exist',
                        confirmButtonText: 'Close'
                    });
                  </script>";
        }
    }
}
$conn->close();
?>
