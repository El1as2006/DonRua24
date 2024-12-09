<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Incluir la conexión a la base de datos
require_once '../../funcs/conexion.php';

// Verificar si el parámetro 'id' está presente en la URL
if (isset($_GET['id'])) {
    // Sanear el ID recibido
    $id = intval($_GET['id']);

    // Consulta para obtener los datos de la publicación correspondiente
    $sql = "SELECT titulo, contenido, imagen FROM publicaciones WHERE id = $id AND activo = 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Obtener los datos de la publicación
        $row = $result->fetch_assoc();
        $titulo = htmlspecialchars($row['titulo']);
        $contenido = htmlspecialchars($row['contenido']);
        $imagen = '../uploads/' . htmlspecialchars($row['imagen']);
    } else {
        // Si no se encuentra la publicación
        $titulo = "Publicación no encontrada";
        $contenido = "La publicación que estás buscando no está disponible o ha sido eliminada.";
        $imagen = '../uploads/placeholder.png'; // Imagen de marcador
    }

    // Consulta para obtener el texto relacionado de la tabla textos
    $sql_texto = "SELECT titulo, subtitulo, contenido FROM textos WHERE id_publicacion = $id";
    $result_texto = $conn->query($sql_texto);
    if ($result_texto && $result_texto->num_rows > 0) {
        // Obtener los datos del texto
        $texto_row = $result_texto->fetch_assoc();
        $titulo_texto = htmlspecialchars($texto_row['titulo']);
        $subtitulo_texto = htmlspecialchars($texto_row['subtitulo']);
        $contenido_texto = nl2br(htmlspecialchars($texto_row['contenido'])); // Convertir saltos de línea a <br>
    } else {
        // Si no se encuentra el texto relacionado
        $titulo_texto = "Sin texto relacionado";
        $subtitulo_texto = "";
        $contenido_texto = "No hay texto relacionado con esta publicación.";
    }
} else {
    // Si no se proporciona un ID
    $titulo = "Error";
    $contenido = "No se proporcionó un ID válido para esta publicación.";
    $imagen = '../uploads/placeholder.png'; // Imagen de marcador
    $titulo_texto = "Error en el texto";
    $subtitulo_texto = "";
    $contenido_texto = "No se pudo obtener el texto relacionado.";
}
?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Noticias</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../../Assets/template1/assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="../../Assets/template1/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/template1/venobox/venobox.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/template1/assets/css/plugin_theme_css.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/template1/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/template1/assets/css/responsive.css">
</head>

<body>
    <div class="em40_header_area_main">

        
            <!-- HEADER TOP AREA -->
            <div class="solutech-header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-9 col-xl-9 col-md-9 col-sm-12">
                            <div class="top-address text-left">
                                <p>
                                    <span><i class="fas fa-home"></i>7ª. Av. Norte entre 23 y 27 calle poniente, San
                                        Salvador</span>
                                    <a href="#"><i class="fas fa-phone-alt"></i>+503 7069 9148</a>
                                    <a href="#"><i class="fas fa-envelope"></i>domingo.savio@salesianosds.com</a>
                                </p>
                            </div>
                        </div>
                        <!-- TOP RIGHT -->
                        <div class="col-xs-12 col-lg-3 col-xl-3 col-md-3 col-sm-12 ">
                            <div class="top-right-menu">
                                <ul class="social-icons text-right text_m_center">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END HEADER TOP AREA -->
            <div class="tx_top2_relative">
                <div class="">
                    <div class="tx_relative_m">
                        <div class="">
                            <div class="mainmenu_width_tx  ">
                                <div class="solutech-main-menu one_page hidden-xs hidden-sm witr_h_h10">
                                    <div class="solutech_nav_area scroll_fixed postfix">
                                        <div class="container">
                                            <div class="row logo-left">
                                                <!-- LOGO -->
                                                <div class="col-md-3 col-sm-3 col-xs-4">
                                                    <div class="logo">
                                                        <a class="main_sticky_main_l" href="index.html" title="solutech">
                                                            <img src="../../Assets/template1/assets/images/logo.png"
                                                                alt="solutech">
                                                        </a>
                                                        <a class="main_sticky_l" href="index.html" title="solutech">
                                                            <img src="../../Assets/template1/assets/images/logo2.png"
                                                                alt="solutech">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-sm-9 col-xs-8">
                                                    <nav class="solutech_menu main-search-menu">
                                                        <ul class="sub-menu">
                                                            <li><a href="index.php">Inicio</a></li>
                                                            <li><a href="news.php">Noticias</a></li>
                                                            <li><a href="#seccion4">Acerca de Nosotros</a></li>
                                                            <li><a href="admisiones.php">Admisiones</a></li>
                                                            <li><a href="contactus.php">Contactanos</a></li>
                                                        </ul>
                                                        <div class="donate-btn-header">
                                                            <a class="dtbtn"
                                                                href="../login-register/login/Login.php">Iniciar Sesión </a>
                                                        </div>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

        <!-- breadcrumb-area -->
        <div class="breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 txtc text-center ccase">
                        <div class="brpt">
                            <h2>Blog</h2>
                        </div>
                        <div class="breadcumb-inner">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fas fa-angle-right"></i></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- solutech_blog_area  -->
        <div class="solutech_blog2_area blog_page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="witr_section_title">
                            <div class="witr_section_title_inner text-center">
                                <h2>Noticias</h2>
                                <h3>Nuestra Noticias</h3>
                                <h1>Noticias más recientes y blog</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contenido -->
                <div class="solutech_blog2_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="<?php echo $imagen; ?>" alt="<?php echo $titulo; ?>" style="max-width: 100%; height: auto;">
                                <div class="blog-content">
                                    <p><?php echo $contenido; ?></p>
                                </div>

                                <!-- Texto relacionado -->
                                <div class="blog-texto">
                                    <h3><?php echo $titulo_texto; ?></h3>
                                    <h4><?php echo $subtitulo_texto; ?></h4>
                                    <p><?php echo $contenido_texto; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="witrfm_area">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget_solutech_description_widget">
                                <div class="solutech-description-area">
                                    <a href="#"><img src="../../Assets/template1/assets/images/logo2.png" alt="image"></a>
                                    <p>La Escuela Domingo Savio, fundada en 1985, forma generaciones con el sistema
                                        preventivo de Don Bosco, guiada por las Hijas del Divino Salvador, con compromiso
                                        educativo y valores salesianos.</p>
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                                        <a href="#"><i class="fas fa-rss"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Include All JS -->
    <script src="../../Assets/template1/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="../../Assets/template1/assets/js/bootstrap.min.js"></script>
    <script src="../../Assets/template1/assets/js/isotope.pkgd.min.js"></script>
    <script src="../../Assets/template1/assets/js/slick.min.js"></script>
    <script src="../../Assets/template1/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../../Assets/template1/venobox/venobox.min.js"></script>
    <script src="../../Assets/template1/assets/js/theme-pluginjs.js"></script>
    <script src="../../Assets/template1/assets/js/jquery.meanmenu.js"></script>
    <script src="../../Assets/template1/assets/js/ajax-mail.js"></script>
    <script src="../../Assets/template1/assets/js/main.js"></script>
</body>

</html>