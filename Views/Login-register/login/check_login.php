<?php
// session_start();
// require '../../../funcs/conexion.php';

// if (isset($_SESSION['email'])) {

//     header('Location: ../../admin/admin.php');
//     exit;
// }

// if (isset($_COOKIE['remember_token'])) {
//     $token = $_COOKIE['remember_token'];

//     $stmt = $conn->prepare('SELECT * FROM usuarios WHERE remember_token = ?');
//     $stmt->bind_param('s', $token);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows === 1) {
//         $user = $result->fetch_assoc();

//         $_SESSION['email'] = $user['email'];
//         $_SESSION['user_type'] = $user['user_type'];

//         header('Location: ../../admin/admin.php');
//         exit;
//     }
// }