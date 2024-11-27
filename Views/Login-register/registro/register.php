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
            margin: 20px auto 40px;
            /* Margen superior e inferior */
        }

        img {
            max-width: 100%;
            /* Escalar el logo */
            height: auto;
            margin: 0 auto;
            /* Centrar */
        }

        .card {
            box-shadow: none;
            /* Eliminar sombra si está causando efecto visual */
        }

        footer {
            margin-top: auto;
            padding: 10px 0;
            text-align: center;
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


                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <h3 class="fw-light my-4" style="margin-right: 10px;">Create Account</h3>
                                        <img src="../../../Assets/template2/assets/img/logo.png" alt="Logo"
                                            style="width: auto; height: 50px; max-height: 100%; object-fit: contain;">
                                    </div>
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
                                    <br>
                                        <a href="../../user/index.php">home</a>
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

    <script src="../../assets.startbootstrap.com/js/sb-customizer.js"></script>
    <sb-customizer project="sb-admin-pro"></sb-customizer>
    <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'8e0ab2dbda4a6daf',t:'MTczMTI5MDUzMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/22755d9a86c9/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8e0ab2dbda4a6daf","version":"2024.10.5","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"6e2c2575ac8f44ed824cef7899ba8463","b":1}'
        crossorigin="anonymous"></script>
</body>

</html>