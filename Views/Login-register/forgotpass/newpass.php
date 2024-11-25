<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Password Reset Page" />
    <meta name="author" content="Your Name" />
    <title>Forgot Password</title>
    <link href="../../../Assets/template2/css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script src="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" defer="" crossorigin="anonymous"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../package/dist/sweetalert2.css">
    <script src="../../../package/dist/sweetalert2.min.js"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic forgot password form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-light my-4">Insert your New Password</h3>
                                </div>
                                <div class="card-body">
                                    <div class="small mb-3 text-muted">Enter your new password.</div>
                                    <!-- Forgot password form-->
                                    <form method="POST" action="newpass.php?id=<?php echo htmlspecialchars($_GET['id']); ?>">
                                        <!-- Form Group (password and confirm password fields)-->
                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="password">Password</label>
                                                    <input class="form-control" id="password" name="password"
                                                        type="password" placeholder="Enter password" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="confirm_password">Confirm Password</label>
                                                    <input class="form-control" id="confirm_password"
                                                        name="confirm_password" type="password"
                                                        placeholder="Confirm password" required />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Form Group (submit options)-->
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="../login/login.php">Return to login</a>
                                            <button class="btn btn-primary" type="submit">Reset Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small"></div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!"></a>
                            <a href="#!"></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php

    $conn = include_once("../../../funcs/conexion.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = isset($_GET["id"]) ? intval($_GET["id"]) : null;

        $pass = mysqli_real_escape_string($conn, $_POST['password']);
        $confpass = mysqli_real_escape_string($conn, $_POST["confirm_password"]);

        if (empty($pass) || empty($confpass)) {
            echo "<script>Swal.fire({
                title: 'This field is empty',
                text: 'Please fill out both fields.',
                icon: 'warning',
                button: 'Close',
            });</script>";  
        } else {
            if ($pass !== $confpass) {
                echo "<script>Swal.fire({
                    title: 'Passwords do not match',
                    text: 'Please ensure both passwords are the same.',
                    icon: 'error',
                    button: 'Close',
                });</script>";
            } else {
                $encrypted_pass = password_hash($pass, PASSWORD_DEFAULT);

                echo "<pre>";
                var_dump($_GET);
                echo "</pre>";

                if ($id === null) {
                    echo "<script>Swal.fire({
                        title: 'Error',
                        text: 'Invalid or missing user ID.',
                        icon: 'error',
                        button: 'Close',
                    });</script>";
                } else {

                    echo "<p>User ID is: " . $id . "</p>";

                    $sql = "UPDATE usuarios SET pass = ? WHERE id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("si", $encrypted_pass, $id);

                    if ($stmt->execute()) {
                        echo "<script>
                        Swal.fire({
                            title: 'Password Updated',
                            text: 'Your password has been successfully updated.',
                            icon: 'success',
                            button: 'Close'
                        }).then(() => {
                            window.location.href = '../login/login.php';
                        });
                        </script>";
                    } else {
                        echo "<script>Swal.fire({
                            title: 'Error',
                            text: 'There was a problem updating the password. Please try again.',
                            icon: 'error',
                            button: 'Close'
                        });</script>";
                    }                    
                    $stmt->close(); 
                }
            }
        }
    }
    $conn->close();
    ?>
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="../assets.startbootstrap.com/js/sb-customizer.js"></script>
</body>
</html>
