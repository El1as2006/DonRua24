<!DOCTYPE html>
<html lang="en">
<head>
<style>
    /* Configuración básica */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-image: url('../../../Assets/template2/assets/img/fondo.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    /* Contenedor principal */
    .login-container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 20px;
    }

    /* Caja de inicio de sesión */
    .login-box {
        width: 90%;
        max-width: 400px;
        background: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
    }

    /* Estilo para imágenes */
    img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    /* Estilo para evitar márgenes y manejar el espacio inferior */
    .login-container {
        margin: 0;
        padding-bottom: 20px;
    }

    /* Estilo adicional para tarjetas (si se usan) */
    .card {
        box-shadow: none;
    }

    /* Estilo adicional para el cuerpo si necesita flexibilidad */
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="../../../Assets/template2/css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/template2/assets/img/favicon.png" />
    <script data-search-pseudo-elements="" defer=""
        src="../../../Plugins/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous">
    </script>
    <script src="../../../Plugins/cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../package/dist/sweetalert2.css">
    <script src="../../../package/dist/sweetalert2.min.js"></script>
</head>

<body class="bg-primary">
    <?php 

    require __DIR__ . "../../../../vendor/autoload.php";

    $client = new  Google\Client();

    $client->setClientId("943455787225-q8e87klnf1e1haqtq7m3g0vccumenv94.apps.googleusercontent.com");
    $client->setClientSecret("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nm");
    $client->setRedirectUri("http://localhost/DonRua24/Views/admin/admin.php");

    $client->addScope("email");
    $client->addScope("profile");

    $url = $client->createAuthUrl();
    
    ?>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                            <!-- Social login form-->
                            <div class="card my-5">
                                <div class="card-body p-5 text-center">

                                    <div style="text-align: center; margin-bottom: 15px;">
                                        <img src="../../../Assets/template2/assets/img/logo.png" alt="Logo"
                                            style="max-width: 100%; height: auto; display: block; margin: 0 auto; text-align: center;"
                                            style="max-width: 400px; height: auto; display: block; margin: 0 auto;"
                                            style="max-width: 100px; height: auto; display: block; margin: 0 auto;">
                                    </div>
                                    <div class="h3 fw-light mb-3">Sign In</div>
                                    <div>
                                    <a class="btn btn-icon btn-google mx-1" href="<?= $url ?>"><i class="fab fa-google fa-fw fa-sm"></i></a>
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body p-5">
                                    <!-- Login form-->
                                    <form action="login_backend.php" method="POST">
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="email">Email address</label>
                                            <input class="form-control form-control-solid" type="text" id="email"
                                                name="email" placeholder="Enter your email" aria-label="Email Address"
                                                aria-describedby="emailExample" required />
                                        </div>
                                        <!-- Form Group (password)-->
                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="password">Password</label>
                                            <input class="form-control form-control-solid" type="password" id="password"
                                                name="password" placeholder="Enter your password" aria-label="Password"
                                                aria-describedby="passwordExample" required />
                                        </div>
                                        <!-- Form Group (forgot password link)-->
                                        <div class="mb-3"><a class="small"
                                                href="../forgotpass/forgotpassword.php">Forgot your password?</a></div>
                                        <!-- Form Group (login box)-->
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <div class="form-check">
                                                <input class="form-check-input" id="checkRememberPassword"
                                                    type="checkbox" value="" />
                                                <label class="form-check-label" for="checkRememberPassword">Remember
                                                    password</label>
                                            </div>
                                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body px-5 py-4">
                                    <div class="small text-center">
                                        New user?
                                        <a href="../registro/register.php">Create an account!</a>
                                    </div>
                                    <div class="small text-center">
                                        <a href="../../user/index.php">Inicio</a>
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

    <script src="../../../Plugins/cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="../../../Assets/template2/js/scripts.js"></script>
    <script src="../../../Assets/template2/assets.startbootstrap.com/js/sb-customizer.js"></script>
    <sb-customizer project="sb-admin-pro"></sb-customizer>
</body>

</html>