<!DOCTYPE html>
<html lang="en">

<head>

    <style>
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        overflow-y: auto;
        /* Permitir desplazamiento vertical */
        background-image: url('../../../Assets/template2/assets/img/fondo.png');
        /* Imagen de fondo */
        background-size: cover;
        /* Expandir al tamaño de la pantalla */
        background-repeat: no-repeat;
        /* No repetir */
        background-position: center center;
        /* Centrar */
    }

    .login-container {
        min-height: calc(100vh - 20px);
        /* Altura completa con espacio debajo */
        display: flex;
        justify-content: center;
        align-items: flex-start;
        /* Alinear hacia arriba */
        flex-direction: column;
        /* Estructura vertical */
        padding: 20px 0;
        /* Espaciado superior e inferior */
    }

    .login-box {
        width: 90%;
        /* Adaptarse al tamaño del viewport */
        max-width: 400px;
        /* No exceder un ancho máximo */
        background: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        /* Margen superior e inferior */
    }

    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        overflow-y: auto;
        /* Permitir desplazamiento vertical */
        background-image: url('../../../Assets/template2/assets/img/fondo.png');
        /* Imagen de fondo */
        background-size: cover;
        /* Expandir al tamaño de la pantalla */
        background-repeat: no-repeat;
        /* No repetir */
        background-position: center center;
        /* Centrar */
    }

    .login-container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        /* Asegurar estructura vertical */
        padding: 20px;
        /* Espacio para contenido accesible */
    }

    .login-box {
        width: 90%;
        /* Adaptarse al tamaño del viewport */
        max-width: 400px;
        /* No exceder un ancho máximo */
        background: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    img {
        max-width: 100%;
        /* Escalar el logo */
        height: auto;
        margin: 0 auto;
        /* Centrar */
    }

    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        overflow-y: auto;
        /* Permitir desplazamiento vertical */
        background-image: url('../../../Assets/template2/assets/img/fondo.png');
        /* Imagen de fondo */
        background-size: cover;
        /* Expandir al tamaño de la pantalla */
        background-repeat: no-repeat;
        /* No repetir */
        background-position: center center;
        /* Centrar */
    }

    .login-container {
        min-height: 100vh;
        /* Ocupa siempre el tamaño completo */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        /* Asegurar estructura vertical */
        padding: 20px;
        /* Espacio para contenido accesible */
    }

    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        overflow: hidden;
        /* Evitar barras de desplazamiento */
        background-image: url('../../../Assets/template2/assets/img/fondo.png');
        /* Imagen de fondo */
        background-size: cover;
        /* Expandir al tamaño de la pantalla */
        background-repeat: no-repeat;
        /* No repetir */
        background-position: center center;
        /* Centrar */
    }

    .login-container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        /* Eliminar cualquier margen */
    }

    .card {
        box-shadow: none;
        /* Eliminar sombra si está causando efecto visual */
    }

    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-image: url('../../../Assets/template2/assets/img/fondo.png');
        /* Imagen de fondo */
        background-size: cover;
        /* Expandir al tamaño de la pantalla */
        background-repeat: no-repeat;
        /* No repetir */
        background-position: center center;
        /* Centrar */
    }

    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .login-container {
        flex: 1;
        /* Forzar que el contenedor ocupe el espacio necesario */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .login-container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
        /* Espacio inferior agregado */
    }

    body {
        background-image: url('../../../Assets/template2/assets/img/fondo.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
        margin: 0;
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