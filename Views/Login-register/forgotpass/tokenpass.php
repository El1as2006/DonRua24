<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Insert Token</title>
        <link href="../../../Assets/template2/css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements="" defer="" src="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="../cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../package/dist/sweetalert2.css">
        <script src="../../../package/dist/sweetalert2.min.js"></script>
</head>
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
                                    <div class="card-header justify-content-center"><h3 class="fw-light my-4">Insert the Token</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Enter the token that has been sent to your email.</div>
                                        <!-- Forgot password form-->
                                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                            <!-- Form Group (Para TOKEN)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="token">Token</label>
                                                <input class="form-control" name="token" id="token" type="text" aria-describedby="text" placeholder="Enter token" />
                                            </div>
                                            <!-- Form Group (submit options)-->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="../login/login.php">Return to login</a>
                                                <button class="btn btn-primary" type="submit" >Check Token</button>
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
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $conn = include '../../../funcs/conexion.php';
    if (!$conn) {
        die("Database connection failed.");
    }

    $token = mysqli_real_escape_string($conn, $_POST['token']);

    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE token = ?");
    if (!$stmt) {
        die("Preparation failed: " . $conn->error);
    }
    $stmt->bind_param('s', $token);
    
    if (!$stmt->execute()) {
        die("Execution failed: " . $stmt->error); 
    }
    
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        $id = $row['id'];

        echo "<script>
        Swal.fire({
            title: 'Token Verified',
            text: 'In the next form, you will set a new password for your account.',
            icon: 'success',
            button: 'Close',
        }).then(() => {
            window.location.href = 'newpass.php?id=" . $id . "';
        });
        </script>";
    } else {
        echo "<script>
        Swal.fire({
            title: 'Incorrect Token',
            text: 'The provided token is incorrect. Please try again.',
            icon: 'error',
            button: 'Close',
        }).then(() => {
            window.location.href = 'forgotpassword.php';
        });
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
        <script src="../cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

        <script src="../assets.startbootstrap.com/js/sb-customizer.js"></script>
        <sb-customizer project="sb-admin-pro"></sb-customizer>
    <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8e0ab2dd19c67476',t:'MTczMTI5MDUzMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/22755d9a86c9/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8e0ab2dd19c67476","version":"2024.10.5","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"6e2c2575ac8f44ed824cef7899ba8463","b":1}' crossorigin="anonymous"></script>
</body>
</html>
