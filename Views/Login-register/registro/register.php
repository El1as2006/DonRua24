<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register</title>
    <link href="../../../Assets/template2/css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/template2/assets/img/favicon.png" />
    <script data-search-pseudo-elements="" defer=""
        src="../../../Plugins/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="../../../Plugins/cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../package/dist/sweetalert2.css">
    <script src="../../../package/dist/sweetalert2.min.js"></script>
    <style>
        /* Configuración básica */
        html,
        body {
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
    </style>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <!-- Basic registration form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="fw-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Registration form-->
                                    <form action="registro_backend.php" method="POST">
                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="name">First Name</label>
                                                    <input class="form-control" id="name" name="name" type="text"
                                                        placeholder="Enter first name" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="lastname">Last Name</label>
                                                    <input class="form-control" id="lastname" name="lastname"
                                                        type="text" placeholder="Enter last name" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="small mb-1" for="email">Email</label>
                                            <input class="form-control" id="email" name="email" type="email"
                                                placeholder="Enter email address" required />
                                        </div>
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
                                                    <label class="small mb-1" for="confirm_password">Confirm
                                                        Password</label>
                                                    <input class="form-control" id="confirm_password"
                                                        name="confirm_password" type="password"
                                                        placeholder="Confirm password" required />
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-block" type="submit">Create Account</button>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="../login/login.php">Have an account? Go to login</a>
                                    </div>
                                </div>
                                <div class="small text-center">
                                    <a href="../../user/index.php">Inicio</a>
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
                            ·
                            <a href="#!"></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../../cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="../../js/scripts.js"></script>
</body>

</html>