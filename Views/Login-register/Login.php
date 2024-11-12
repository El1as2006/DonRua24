<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="../../Assets/template2/css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="../../Assets/template2/assets/img/favicon.png" />
        <script data-search-pseudo-elements="" defer="" src="../../Plugins/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="../../Plugins/cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="package/dist/sweetalert2.css">
        <script src="package/dist/sweetalert2.min.js"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-xl px-4">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                                <!-- Social login form-->
                                <div class="card my-5">
                                    <div class="card-body p-5 text-center">
                                        <div class="h3 fw-light mb-3">Sign In</div>                                   
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body p-5">
                                        <!-- Login form-->
                                        <form>
                                            <!-- Form Group (email address)-->
                                            <div class="mb-3">
                                                <label class="text-gray-600 small" for="emailExample">Email address</label>
                                                <input class="form-control form-control-solid" type="text" placeholder="" aria-label="Email Address" aria-describedby="emailExample" />
                                            </div>
                                            <!-- Form Group (password)-->
                                            <div class="mb-3">
                                                <label class="text-gray-600 small" for="passwordExample">Password</label>
                                                <input class="form-control form-control-solid" type="password" placeholder="" aria-label="Password" aria-describedby="passwordExample" />
                                            </div>
                                            <!-- Form Group (forgot password link)-->
                                            <div class="mb-3"><a class="small" href="auth-password-social.html">Forgot your password?</a></div>
                                            <!-- Form Group (login box)-->
                                            <div class="d-flex align-items-center justify-content-between mb-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="checkRememberPassword" type="checkbox" value="" />
                                                    <label class="form-check-label" for="checkRememberPassword">Remember password</label>
                                                </div>
                                                <a class="btn btn-primary" href="dashboard-1.html">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body px-5 py-4">
                                        <div class="small text-center">
                                            New user?
                                            <a href="register.php">Create an account!</a>
                                        </div>
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
session_start();

$conn = include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
  
   if (empty($email) || empty($password)) {
       echo "Please fill in all fields";
   } else {


       $sql = "SELECT * FROM usuarios WHERE email=?";
       $stmt = $conn->prepare($sql);
       $stmt->bind_param("s", $email);
       $stmt->execute();
       $result = $stmt->get_result();

       if ($result->num_rows == 1) {

           $row = $result->fetch_assoc();
           if (password_verify($password, $row['pass'])) {

               $_SESSION['email'] = $email;
               echo "<p>
               <script>
               Swal.fire({
               title: 'Succesful Login',
               text: 'Welcome',
               icon: 'success',
               button: 'Close',
               });
               </script>
               </p>"; 
            
               header("Location: admin.php"); 
           } else 
           {
            echo "<p>
            <script>
            Swal.fire({
            title: 'Wrong Password',
            text: 'Please check your password',
            icon: 'warning',
            button: 'Close',
            });
            </script>
            </p>"; 
           }
       } else 
       {
        echo "<p>
        <script>
        Swal.fire({
        title: 'Non-existemt User',
        text: 'This user does not exist',
        icon: 'warning',
        button: 'Close',
        });
        </script>
        </p>"; 
       }
   }
}
$conn->close();
?>
        <script src="../../Plugins/cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../Assets/template2/js/scripts.js"></script>
        <script src="../../Assets/template2/assets.startbootstrap.com/js/sb-customizer.js"></script>
        <sb-customizer project="sb-admin-pro"></sb-customizer>
    <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8e0ab2de5bbe7476',t:'MTczMTI5MDUzMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../Plugins/cdn-cgi/challenge-platform/h/b/scripts/jsd/22755d9a86c9/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8e0ab2de5bbe7476","version":"2024.10.5","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"6e2c2575ac8f44ed824cef7899ba8463","b":1}' crossorigin="anonymous"></script>
</body>
</html>