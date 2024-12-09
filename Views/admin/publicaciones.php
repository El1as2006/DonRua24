<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../Login-register/login/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Domingo savio</title>
    <link href="../../Assets/template2/css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements="" defer=""
        src="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../../Assets/template1/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/template1/venobox/venobox.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/template1/assets/css/plugin_theme_css.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/template1/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/template1/assets/css/responsive.css">


    <style>
        /* Asegurar tamaño fijo de las imágenes */
        .publicacion img {
            width: 500px;
            height: 500px;
            object-fit: cover;
            /* Recorta y ajusta la imagen */
            object-position: center;
            /* Centra la imagen */
            border-radius: 8px;
            /* Opcional: bordes redondeados */
        }

        .publicacion {
            display: flex;
            justify-content: center;
            /* Centrar contenido en su espacio */
            align-items: center;
            width: 500px;
            height: 500px;
            overflow: hidden;
            margin: 10px;
        }
    </style>

    <!-- Rutas exclusivas para el área de publicaciones con estilos del index -->
    <link rel="stylesheet" href="../../Assets/template1/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Assets/template1/assets/css/styles.css">
</head>



<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow justify-content-between navbar-light bg-white" id="sidenavAccordion">
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle">
            <i data-feather="menu"></i>
        </button>
        <a class="navbar-brand pe-3 ps-4 ps-lg-2">DOMINGO SAVIO</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-icon btn-transparent-dark me-3" href="../../logout.php">
                    <i data-feather="log-out"></i>
                </a>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <div class="sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="admin.php">
                            <div class="nav-link-icon"><i data-feather="home"></i></div>
                            Dashboards
                        </a>
                        <a class="nav-link" href="publicaciones.php">
                            <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                            Publicaciones
                        </a>
                        <a class="nav-link" href="users.php">
                            <div class="nav-link-icon"><i data-feather="users"></i></div>
                            Usuarios
                        </a>
                        <a class="nav-link" href="admisionesadmin.php">
                            <div class="nav-link-icon"><i data-feather="briefcase"></i></div>
                            Admisiones
                        </a>
                        <a class="nav-link" href="contactadmin.php">
                            <div class="nav-link-icon"><i data-feather="mail"></i></div>
                            Contacto
                        </a>
                    </div>

                </div>
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">Logged in as:</div>
                        <div class="sidenav-footer-title"><?php echo $_SESSION["username"]; ?></div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container-xl px-4">
                        <div class="page-header-content pt-4">
                            <h1 class="page-header-title">Publicaciones 1</h1>
                            <div class="page-header-subtitle">Podras modificar todas las publicaciones que se encutran
                                en el sector publicaciones 1</div>
                        </div>
                    </div>
                </header>


                <div class="container-xl px-4 mt-n10">


                    <!-- Section with multiple buttons -->
                    <div class="news-button-section">
                        <h5>Acciones disponibles</h5>
                        <p>Aquí puedes realizar diferentes acciones sobre los datos.</p>
                        <div class="d-flex justify-content-center flex-wrap gap-3">
                            <button id="openNewPublicationButton" class="new-publication-button">
                                <i data-feather="file-plus"></i>
                                NUEVA PUBLICACIÓN
                            </button>
                            <button id="editButton" data-image class="new-publication-button">
                                <i data-feather="edit-3"></i>
                                EDITAR
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="newPublicationModal" tabindex="-1"
                        aria-labelledby="newPublicationModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newPublicationModalLabel">Nueva Publicación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="add.php" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Título</label>
                                            <input type="text" class="form-control" id="title" name="title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="content" class="form-label">Contenido</label>
                                            <textarea class="form-control" id="content" name="content" rows="3"
                                                required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="sector" class="form-label">Seleccionar Sector</label>
                                            <select class="form-control" id="sector" name="sector" required>
                                                <option value="0">Sección 1</option>
                                                <option value="1">Sección 2</option>
                                                <option value="2">Sección 3</option>
                                                <option value="3">Sección 4</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Subir Imagen</label>
                                            <input type="file" class="form-control" id="image" name="image"
                                                accept="image/*" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Card for Editar -->
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Editar Publicación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editForm" enctype="multipart/form-data">
                                        <input type="hidden" id="editId" name="id">
                                        <input type="hidden" id="currentImage" name="current_image">
                                        <!-- Imagen actual -->
                                        <div class="mb-3">
                                            <label for="editTitle" class="form-label">Título</label>
                                            <input type="text" class="form-control" id="editTitle" name="title"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editContent" class="form-label">Contenido</label>
                                            <textarea class="form-control" id="editContent" name="content" rows="3"
                                                required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="editImage" class="form-label">Imagen</label>
                                            <input type="file" class="form-control" id="editImage" name="image">
                                            <img id="imagePreview" src="" alt="Previsualización"
                                                style="max-width: 100%; margin-top: 10px; display: none;">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>





                    <!-- Contenedor para la edición -->
                    <div id="editSection" class="container mt-4 d-none">
                        <h3>Selecciona una publicación para editar</h3>
                        <div class="row" id="publicationCards">
                            <!-- Tarjetas cargadas dinámicamente -->
                        </div>
                    </div>

                    <!-- Main page content-->
                    <div class="container-xl px-4">



                        <!-------------------------------------------------- publicaciones 1 -------------------------------------------------->

                        <h2 class="section-below" class="mt-5 mb-0">Sección 1</h2>

                        <hr class="section-below" class="mt-0 mb-4" />
                        <div class="section-below row">
                            <div class="witr_pslide3 all_pslides_color ps1 ps3 service_active">
                                <div class="witr_cslide3_idany service_top">
                                    <?php
                                    require_once '../../funcs/conexion.php';

                                    // Máximo número de posiciones
                                    $max_positions = 2;

                                    // Consulta para obtener las publicaciones con Tipo_Publicaciones = 0
                                    $sql = "SELECT titulo, contenido, imagen FROM publicaciones WHERE Tipo_Publicaciones = 0 AND activo = 1 LIMIT $max_positions";

                                    $resultado = $conn->query($sql);

                                    // Inicializar array de publicaciones
                                    $imagenes = array_fill(0, $max_positions, null); // Crear un array con $max_positions valores nulos
                                    $index = 1; // Para numeración dinámica
                                    
                                    // Cargar publicaciones en las posiciones correspondientes
                                    if ($resultado && $resultado->num_rows > 0) {
                                        $i = 0; // Índice para el array de imágenes
                                        while ($i < $max_positions && $row = $resultado->fetch_assoc()) {
                                            $imagenes[$i] = [
                                                'titulo' => htmlspecialchars($row['titulo']),
                                                'contenido' => htmlspecialchars($row['contenido']),
                                                'imagen' => !empty($row['imagen']) ? '../uploads/' . htmlspecialchars($row['imagen']) : '../uploads/placeholder.png',
                                            ];
                                            $i++;
                                        }
                                    }

                                    // Generar las posiciones fijas
                                    for ($i = 0; $i < $max_positions; $i++) {
                                        if (!empty($imagenes[$i])) {
                                            // Publicación existente
                                            $titulo = $imagenes[$i]['titulo'];
                                            $contenido = $imagenes[$i]['contenido'];
                                            $imagePath = $imagenes[$i]['imagen'];

                                            echo '<div class="section-below item_pos col-lg-12">';
                                            echo '    <div class="witr_single_pslide">';
                                            echo '        <div class="witr_pslide_image">';
                                            echo '            <img src="' . $imagePath . '" alt="' . $titulo . '" class="img-fluid">';
                                            echo '        </div>';
                                            echo '        <div class="witr_content_pslide_text">';
                                            echo '            <div class="witr_number_pslide">';
                                            echo '                <h4>' . sprintf("%02d.", $index) . '</h4>'; // Número dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_content_pslide">';
                                            echo '                <p>' . $contenido . '</p>'; // Contenido dinámico
                                            echo '                <h3><a href="#">' . $titulo . '</a></h3>'; // Título dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_pslide_custom">';
                                            echo '                <a href="#"><span class="ti-arrow-right"></span></a>';
                                            echo '            </div>';
                                            echo '        </div>';
                                            echo '    </div>';
                                            echo '</div>';
                                        } else {
                                            // Espacio vacío con marcador
                                            echo '<div class="section-below item_pos col-lg-12">';
                                            echo '    <div class="witr_single_pslide">';
                                            echo '        <div class="witr_pslide_image">';
                                            echo '            <img src="../uploads/placeholder.png" alt="Espacio disponible" class="img-fluid">';
                                            echo '        </div>';
                                            echo '        <div class="witr_content_pslide_text">';
                                            echo '            <div class="witr_number_pslide">';
                                            echo '                <h4>' . sprintf("%02d.", $index) . '</h4>'; // Número dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_content_pslide">';
                                            echo '                <p>Espacio disponible.</p>'; // Indicador de espacio vacío
                                            echo '                <h3><a href="#">Sin contenido</a></h3>';
                                            echo '            </div>';
                                            echo '            <div class="witr_pslide_custom">';
                                            echo '                <a href="#"><span class="ti-arrow-right"></span></a>';
                                            echo '            </div>';
                                            echo '        </div>';
                                            echo '    </div>';
                                            echo '</div>';
                                        }
                                        $index++; // Incrementar el número dinámico
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>


                        <!-------------------------------------------------- publicaciones 2 -------------------------------------------------->
                        <h2 class="section-below" class="mt-5 mb-0">Sección 2</h2>

                        <hr class="section-below" class="mt-0 mb-4" />
                        <div class="section-below" class="row">
                            <div class="witr_pslide3 all_pslides_color ps1 ps3 service_active">
                                <div class="witr_cslide3_idany service_top">
                                    <?php
                                    require_once '../../funcs/conexion.php';

                                    // Consulta para obtener las publicaciones con Tipo_Publicaciones = 1 (máximo 5)
                                    $sql = "SELECT titulo, contenido, imagen FROM publicaciones WHERE Tipo_Publicaciones = 1 AND activo = 1 LIMIT 5";

                                    $resultado = $conn->query($sql);

                                    $imagenes = [null, null, null, null, null]; // Array para mantener las 5 publicaciones
                                    $index = 1; // Para numeración dinámica
                                    
                                    if ($resultado && $resultado->num_rows > 0) {
                                        $i = 0; // Índice para el array de imágenes
                                        while ($i < 5 && $row = $resultado->fetch_assoc()) {
                                            $imagenes[$i] = [
                                                'titulo' => htmlspecialchars($row['titulo'] ?? 'Título no disponible'),
                                                'contenido' => htmlspecialchars($row['contenido'] ?? 'Contenido no disponible'),
                                                'imagen' => '../uploads/' . htmlspecialchars($row['imagen'] ?? 'placeholder.png'),
                                            ];
                                            $i++;
                                        }
                                    }

                                    // Generar las 5 posiciones, sean dinámicas o con marcador
                                    for ($i = 0; $i < 5; $i++) {
                                        if (!empty($imagenes[$i])) {
                                            $titulo = $imagenes[$i]['titulo'];
                                            $contenido = $imagenes[$i]['contenido'];
                                            $imagePath = $imagenes[$i]['imagen'];

                                            echo '<div class="section-below" class="item_pos col-sm-6 col-md-4 col-xl-3 mb-4">';
                                            echo '    <div class="witr_single_pslide">';
                                            echo '        <div class="witr_pslide_image">';
                                            echo '            <img src="' . $imagePath . '" alt="' . $titulo . '" class="img-fluid">';
                                            echo '        </div>';
                                            echo '        <div class="witr_content_pslide_text">';
                                            echo '            <div class="witr_number_pslide">';
                                            echo '                <h4>' . sprintf("%02d.", $index) . '</h4>'; // Número dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_content_pslide">';
                                            echo '                <p>' . $contenido . '</p>'; // Contenido dinámico
                                            echo '                <h3><a href="#">' . $titulo . '</a></h3>'; // Título dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_pslide_custom">';
                                            echo '                <a href="#"><span class="ti-arrow-right"></span></a>';
                                            echo '            </div>';
                                            echo '        </div>';
                                            echo '    </div>';
                                            echo '</div>';
                                        } else {
                                            // Mostrar un marcador indicando que el espacio está disponible
                                            echo '<div class="section-below" class="item_pos col-sm-6 col-md-4 col-xl-3 mb-4">';
                                            echo '    <div class="witr_single_pslide">';
                                            echo '        <div class="witr_pslide_image">';
                                            echo '            <img src="../uploads/placeholder.png" alt="Espacio disponible" class="img-fluid">';
                                            echo '        </div>';
                                            echo '        <div class="witr_content_pslide_text">';
                                            echo '            <div class="witr_number_pslide">';
                                            echo '                <h4>' . sprintf("%02d.", $index) . '</h4>'; // Número dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_content_pslide">';
                                            echo '                <p>Espacio disponible.</p>'; // Indicador de espacio vacío
                                            echo '                <h3><a href="#">Sin contenido</a></h3>';
                                            echo '            </div>';
                                            echo '            <div class="witr_pslide_custom">';
                                            echo '                <a href="#"><span class="ti-arrow-right"></span></a>';
                                            echo '            </div>';
                                            echo '        </div>';
                                            echo '    </div>';
                                            echo '</div>';
                                        }
                                        $index++; // Incrementar el número
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>





                        <!-------------------------------------------------- publicaciones 3 -------------------------------------------------->
                        <h2 class="section-below mt-5 mb-0">Sección 3</h2>
                        <hr class="section-below mt-0 mb-4" />
                        <div class="section-below row">
                            <div class="witr_pslide3 all_pslides_color ps1 ps3 service_active">
                                <div class="witr_cslide3_idany service_top">
                                    <?php
                                    require_once '../../funcs/conexion.php';

                                    // Máximo número de posiciones
                                    $max_positions = 3;

                                    // Consulta para obtener las publicaciones con Tipo_Publicaciones = 2
                                    $sql = "SELECT titulo, contenido, imagen FROM publicaciones WHERE Tipo_Publicaciones = 2 AND activo = 1 LIMIT $max_positions";

                                    $resultado = $conn->query($sql);

                                    // Inicializar array de publicaciones
                                    $imagenes = array_fill(0, $max_positions, null); // Crear un array con $max_positions valores nulos
                                    $index = 1; // Para numeración dinámica
                                    
                                    // Cargar publicaciones en las posiciones correspondientes
                                    if ($resultado && $resultado->num_rows > 0) {
                                        $i = 0; // Índice para el array de imágenes
                                        while ($i < $max_positions && $row = $resultado->fetch_assoc()) {
                                            $imagenes[$i] = [
                                                'titulo' => htmlspecialchars($row['titulo'] ?? 'Título no disponible'),
                                                'contenido' => htmlspecialchars($row['contenido'] ?? 'Contenido no disponible'),
                                                'imagen' => !empty($row['imagen']) ? '../uploads/' . htmlspecialchars($row['imagen']) : '../uploads/placeholder.png',
                                            ];
                                            $i++;
                                        }
                                    }

                                    // Generar las posiciones fijas
                                    for ($i = 0; $i < $max_positions; $i++) {
                                        if (!empty($imagenes[$i])) {
                                            // Publicación existente
                                            $titulo = $imagenes[$i]['titulo'];
                                            $contenido = $imagenes[$i]['contenido'];
                                            $imagePath = $imagenes[$i]['imagen'];

                                            echo '<div class="section-below item_pos col-md-4 mb-4">';
                                            echo '    <div class="witr_single_pslide">';
                                            echo '        <div class="witr_pslide_image">';
                                            echo '            <img src="' . $imagePath . '" alt="' . $titulo . '" class="img-fluid">';
                                            echo '        </div>';
                                            echo '        <div class="witr_content_pslide_text">';
                                            echo '            <div class="witr_number_pslide">';
                                            echo '                <h4>' . sprintf("%02d.", $index) . '</h4>'; // Número dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_content_pslide">';
                                            echo '                <p>' . $contenido . '</p>'; // Contenido dinámico
                                            echo '                <h3><a href="#">' . $titulo . '</a></h3>'; // Título dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_pslide_custom">';
                                            echo '                <a href="#"><span class="ti-arrow-right"></span></a>';
                                            echo '            </div>';
                                            echo '        </div>';
                                            echo '    </div>';
                                            echo '</div>';
                                        } else {
                                            // Espacio vacío con marcador
                                            echo '<div class="section-below item_pos col-md-4 mb-4">';
                                            echo '    <div class="witr_single_pslide">';
                                            echo '        <div class="witr_pslide_image">';
                                            echo '            <img src="../uploads/placeholder.png" alt="Espacio disponible" class="img-fluid">';
                                            echo '        </div>';
                                            echo '        <div class="witr_content_pslide_text">';
                                            echo '            <div class="witr_number_pslide">';
                                            echo '                <h4>' . sprintf("%02d.", $index) . '</h4>'; // Número dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_content_pslide">';
                                            echo '                <p>Espacio disponible.</p>'; // Indicador de espacio vacío
                                            echo '                <h3><a href="#">Sin contenido</a></h3>';
                                            echo '            </div>';
                                            echo '            <div class="witr_pslide_custom">';
                                            echo '                <a href="#"><span class="ti-arrow-right"></span></a>';
                                            echo '            </div>';
                                            echo '        </div>';
                                            echo '    </div>';
                                            echo '</div>';
                                        }
                                        $index++; // Incrementar el número dinámico
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>


                        <!-------------------------------------------------- publicaciones 4 -------------------------------------------------->
                        <h2 class="section-below" class="mt-5 mb-0">Sección 4</h2>
                        <hr class="section-below" class="mt-0 mb-4" />
                        <div class="section-below row">
                            <div class="witr_pslide3 all_pslides_color ps1 ps3 service_active">
                                <div class="witr_cslide3_idany service_top">
                                    <?php
                                    require_once '../../funcs/conexion.php';

                                    // Máximo número de posiciones
                                    $max_positions = 6;

                                    // Consulta para obtener las publicaciones con Tipo_Publicaciones = 3
                                    $sql = "SELECT titulo, imagen FROM publicaciones WHERE Tipo_Publicaciones = 3 AND activo = 1 LIMIT $max_positions";

                                    $resultado = $conn->query($sql);

                                    // Inicializar array de publicaciones
                                    $imagenes = array_fill(0, $max_positions, null); // Crear un array con $max_positions valores nulos
                                    $index = 1; // Para numeración dinámica
                                    
                                    // Cargar publicaciones en las posiciones correspondientes
                                    if ($resultado && $resultado->num_rows > 0) {
                                        $i = 0; // Índice para el array de imágenes
                                        while ($i < $max_positions && $row = $resultado->fetch_assoc()) {
                                            $imagenes[$i] = [
                                                'titulo' => htmlspecialchars($row['titulo'] ?? 'Título no disponible'),
                                                'imagen' => !empty($row['imagen']) ? '../uploads/' . htmlspecialchars($row['imagen']) : '../uploads/placeholder.png',
                                            ];
                                            $i++;
                                        }
                                    }

                                    // Generar las posiciones fijas
                                    for ($i = 0; $i < $max_positions; $i++) {
                                        if (!empty($imagenes[$i])) {
                                            // Publicación existente
                                            $titulo = $imagenes[$i]['titulo'];
                                            $imagePath = $imagenes[$i]['imagen'];

                                            echo '<div class="section-below item_pos col-md-4 mb-4">';
                                            echo '    <div class="witr_single_pslide">';
                                            echo '        <div class="witr_pslide_image">';
                                            echo '            <img src="' . $imagePath . '" alt="' . $titulo . '" class="img-fluid">';
                                            echo '        </div>';
                                            echo '        <div class="witr_content_pslide_text">';
                                            echo '            <div class="witr_number_pslide">';
                                            echo '                <h4>' . sprintf("%02d.", $index) . '</h4>'; // Número dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_content_pslide">';
                                            echo '                <h3><a href="#">' . $titulo . '</a></h3>'; // Título dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_pslide_custom">';
                                            echo '                <a href="#"><span class="ti-arrow-right"></span></a>';
                                            echo '            </div>';
                                            echo '        </div>';
                                            echo '    </div>';
                                            echo '</div>';
                                        } else {
                                            // Espacio vacío con marcador
                                            echo '<div class="section-below item_pos col-md-4 mb-4">';
                                            echo '    <div class="witr_single_pslide">';
                                            echo '        <div class="witr_pslide_image">';
                                            echo '            <img src="../uploads/placeholder.png" alt="Espacio disponible" class="img-fluid">';
                                            echo '        </div>';
                                            echo '        <div class="witr_content_pslide_text">';
                                            echo '            <div class="witr_number_pslide">';
                                            echo '                <h4>' . sprintf("%02d.", $index) . '</h4>'; // Número dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_content_pslide">';
                                            echo '                <h3><a href="#">Sin contenido</a></h3>';
                                            echo '            </div>';
                                            echo '            <div class="witr_pslide_custom">';
                                            echo '                <a href="#"><span class="ti-arrow-right"></span></a>';
                                            echo '            </div>';
                                            echo '        </div>';
                                            echo '    </div>';
                                            echo '</div>';
                                        }
                                        $index++; // Incrementar el número dinámico
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>


                        <!---------------------------------------------------------------------------- publicaciones 5---------------------------------------------------------------------------->
                        <h2 class="section-below mt-5 mb-0">Sección 5</h2>
                        <hr class="section-below mt-0 mb-4" />
                        <div class="section-below row">
                            <div class="witr_pslide3 all_pslides_color ps1 ps3 service_active">
                                <div class="witr_cslide3_idany service_top">
                                    <?php
                                    require_once '../../funcs/conexion.php';

                                    // Número máximo de posiciones
                                    $max_positions = 4;

                                    // Consulta para obtener las publicaciones con Tipo_Publicaciones = 4
                                    $sql = "SELECT titulo, imagen FROM publicaciones WHERE Tipo_Publicaciones = 4 AND activo = 1 LIMIT $max_positions";

                                    $resultado = $conn->query($sql);

                                    // Inicializar array de publicaciones
                                    $imagenes = array_fill(0, $max_positions, null); // Crear un array con $max_positions valores nulos
                                    $index = 1; // Para numeración dinámica
                                    
                                    // Cargar publicaciones en las posiciones correspondientes
                                    if ($resultado && $resultado->num_rows > 0) {
                                        $i = 0; // Índice para el array de imágenes
                                        while ($i < $max_positions && $row = $resultado->fetch_assoc()) {
                                            $imagenes[$i] = [
                                                'titulo' => htmlspecialchars($row['titulo'] ?? 'Título no disponible'),
                                                'imagen' => !empty($row['imagen']) ? '../uploads/' . htmlspecialchars($row['imagen']) : '../uploads/placeholder.png',
                                            ];
                                            $i++;
                                        }
                                    }

                                    // Generar las posiciones fijas
                                    for ($i = 0; $i < $max_positions; $i++) {
                                        if (!empty($imagenes[$i])) {
                                            // Publicación existente
                                            $titulo = $imagenes[$i]['titulo'];
                                            $imagePath = $imagenes[$i]['imagen'];

                                            echo '<div class="section-below item_pos col-md-3 mb-4">'; // Ajuste para 4 elementos por fila
                                            echo '    <div class="witr_single_pslide">';
                                            echo '        <div class="witr_pslide_image">';
                                            echo '            <img src="' . $imagePath . '" alt="' . $titulo . '" class="img-fluid">';
                                            echo '        </div>';
                                            echo '        <div class="witr_content_pslide_text">';
                                            echo '            <div class="witr_number_pslide">';
                                            echo '                <h4>' . sprintf("%02d.", $index) . '</h4>'; // Número dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_content_pslide">';
                                            echo '                <h3><a href="#">' . $titulo . '</a></h3>'; // Título dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_pslide_custom">';
                                            echo '                <a href="#"><span class="ti-arrow-right"></span></a>';
                                            echo '            </div>';
                                            echo '        </div>';
                                            echo '    </div>';
                                            echo '</div>';
                                        } else {
                                            // Espacio vacío con marcador
                                            echo '<div class="section-below item_pos col-md-3 mb-4">'; // Ajuste para 4 elementos por fila
                                            echo '    <div class="witr_single_pslide">';
                                            echo '        <div class="witr_pslide_image">';
                                            echo '            <img src="../uploads/placeholder.png" alt="Espacio disponible" class="img-fluid">';
                                            echo '        </div>';
                                            echo '        <div class="witr_content_pslide_text">';
                                            echo '            <div class="witr_number_pslide">';
                                            echo '                <h4>' . sprintf("%02d.", $index) . '</h4>'; // Número dinámico
                                            echo '            </div>';
                                            echo '            <div class="witr_content_pslide">';
                                            echo '                <h3><a href="#">Sin contenido</a></h3>'; // Indicador de espacio vacío
                                            echo '            </div>';
                                            echo '            <div class="witr_pslide_custom">';
                                            echo '                <a href="#"><span class="ti-arrow-right"></span></a>';
                                            echo '            </div>';
                                            echo '        </div>';
                                            echo '    </div>';
                                            echo '</div>';
                                        }
                                        $index++; // Incrementar el número dinámico
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-0 mb-4" />




                    </div>

            </main>
            <footer class="footer-admin mt-auto footer-light">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright © Your Website 2021</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            ·
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace(); // Reemplaza los íconos en el DOM
    </script>
    <script>
        feather.replace();
        // Show/Hide the edit card
        document.querySelector('.new-publication-button:nth-of-type(2)').addEventListener('click', () => {
            document.getElementById('editCard').style.display = 'block';
            document.getElementById('editCardOverlay').style.display = 'block';
        });
        document.getElementById('closeEditCard').addEventListener('click', () => {
            document.getElementById('editCard').style.display = 'none';
            document.getElementById('editCardOverlay').style.display = 'none';
        });

        // Show/Hide the delete card
        document.querySelector('.new-publication-button:nth-of-type(3)').addEventListener('click', () => {
            document.getElementById('deleteCard').style.display = 'block';
            document.getElementById('deleteCardOverlay').style.display = 'block';
        });
        document.getElementById('closeDeleteCard').addEventListener('click', () => {
            document.getElementById('deleteCard').style.display = 'none';
            document.getElementById('deleteCardOverlay').style.display = 'none';
        });
        document.getElementById('cancelDelete').addEventListener('click', () => {
            document.getElementById('deleteCard').style.display = 'none';
            document.getElementById('deleteCardOverlay').style.display = 'none';
        });
        document.getElementById('botoncancelar').addEventListener('click', () => {
            document.getElementById('publicationCard').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        });

        // Show/Hide the view card
        document.querySelector('.new-publication-button:nth-of-type(4)').addEventListener('click', () => {
            document.getElementById('viewCard').style.display = 'block';
            document.getElementById('viewCardOverlay').style.display = 'block';
        });
        document.getElementById('closeViewCard').addEventListener('click', () => {
            document.getElementById('viewCard').style.display = 'none';
            document.getElementById('viewCardOverlay').style.display = 'none';
        });


        // Toggle sidebar visibility
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.getElementById('layoutSidenav').classList.toggle('collapsed');
        });

        // Seleccionar elementos
        const overlay = document.getElementById('overlay');
        const publicationCard = document.getElementById('publicationCard');
        const newPublicationButton = document.querySelector('.new-publication-button');
        const closeCard = document.getElementById('closeCard');

        // Función para abrir el modal
        newPublicationButton.addEventListener('click', () => {
            publicationCard.style.display = 'block';
            overlay.style.display = 'block';
            document.body.style.overflow = 'hidden'; // Bloquear scroll en el fondo
        });
        // Función para cerrar el modal
        closeCard.addEventListener('click', () => {
            publicationCard.style.display = 'none';
            overlay.style.display = 'none';
            document.body.style.overflow = 'auto'; // Restaurar scroll
        });


        // Cerrar modal al hacer clic en el overlay
        overlay.addEventListener('click', () => {
            publicationCard.style.display = 'none';
            overlay.style.display = 'none';
            document.body.style.overflow = 'auto';
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const editButton = document.querySelector("#editButton"); // Botón EDITAR
            const editSection = document.querySelector("#editSection"); // Sección de publicaciones para edición
            const belowSections = document.querySelectorAll(".section-below"); // Secciones redundantes abajo
            const publicationCards = document.querySelector("#publicationCards"); // Contenedor dinámico

            const loadPublicationsBySection = () => {
                fetch("get_publicaciones.php")
                    .then((response) => response.json())
                    .then((data) => {
                        publicationCards.innerHTML = ""; // Limpia las tarjetas existentes

                        // Iterar sobre las secciones devueltas por el backend
                        Object.keys(data).forEach((sectionId) => {
                            const sectionData = data[sectionId];

                            // Crear un título para cada sección
                            const sectionTitle = document.createElement("h4");
                            sectionTitle.textContent = `Sección ${parseInt(sectionId) + 1}`;
                            sectionTitle.classList.add("mt-4");
                            publicationCards.appendChild(sectionTitle);

                            // Crear un contenedor para las tarjetas de la sección
                            const sectionRow = document.createElement("div");
                            sectionRow.classList.add("row", "mb-4");

                            sectionData.forEach((publication) => {
                                const card = document.createElement("div");
                                card.classList.add("col-md-4", "mb-3");

                                // Definir texto y clase del botón según el estado "activo"
                                const toggleButtonText = publication.activo == 1 ? "Desactivar" : "Activar";
                                const toggleButtonClass = publication.activo == 1 ? "btn-danger" : "btn-success";

                                card.innerHTML = `
                        <div class="card">
                            <img src="${publication.imagen}" class="card-img-top" alt="${publication.titulo}" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">${publication.titulo}</h5>
                                <p class="card-text">${publication.contenido}</p>
                                <button class="btn btn-primary mt-2 edit-publication-btn" 
                                        data-id="${publication.id}" 
                                        data-title="${publication.titulo}" 
                                        data-content="${publication.contenido}" 
                                        data-image="${publication.imagen}" 
                                        data-section="${parseInt(sectionId) + 1}">
                                    Editar
                                </button>
                                <form action="activar.php" method="POST" class="mt-2">
                                    <input type="hidden" name="id" value="${publication.id}">
                                    <input type="hidden" name="current_status" value="${publication.activo}">
                                    <button type="submit" class="btn ${toggleButtonClass}">
                                        ${toggleButtonText}
                                    </button>
                                </form>
                            </div>
                        </div>
                        `;
                                sectionRow.appendChild(card);
                            });

                            publicationCards.appendChild(sectionRow);
                        });

                        // Asignar eventos a los botones "Editar"
                        document.querySelectorAll(".edit-publication-btn").forEach((button) => {
                            button.addEventListener("click", () => {
                                const id = button.dataset.id;
                                const title = button.dataset.title;
                                const content = button.dataset.content;
                                const image = button.dataset.image; // Obtener la URL de la imagen actual

                                // Rellenar los campos del modal
                                document.querySelector("#editId").value = id;
                                document.querySelector("#editTitle").value = title;
                                document.querySelector("#editContent").value = content;
                                document.querySelector("#currentImage").value = image; // Imagen actual (campo oculto)

                                // Mostrar una previsualización de la imagen actual
                                const imagePreview = document.querySelector("#imagePreview");
                                if (imagePreview) {
                                    imagePreview.src = image;
                                    imagePreview.style.display = "block"; // Asegurarse de que sea visible
                                }

                                // Mostrar el modal
                                const editModal = new bootstrap.Modal(document.querySelector("#editModal"));
                                editModal.show();
                            });
                        });
                    })
                    .catch((error) => console.error("Error al cargar publicaciones:", error));
            };

            // Mostrar las tarjetas al hacer clic en "EDITAR" y ocultar las secciones redundantes
            editButton.addEventListener("click", () => {
                belowSections.forEach((section) => section.classList.add("d-none")); // Ocultar todas las secciones redundantes
                editSection.classList.remove("d-none"); // Mostrar el contenedor de las tarjetas
                loadPublicationsBySection(); // Cargar las publicaciones dinámicamente
            });
        });
    </script>

    <script>
        document.querySelector("#editForm").addEventListener("submit", function (e) {
            e.preventDefault(); // Evita que el formulario recargue la página automáticamente

            const formData = new FormData(this); // Captura los datos del formulario

            fetch("update_publicaciones.php", {
                method: "POST",
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) { } else {
                        alert("Error al actualizar la publicación: " + data.message);
                    }
                })
                .catch((error) => {
                    console.error("Error en la solicitud:", error);
                    alert("Hubo un error al intentar actualizar la publicación.");
                });
        });
    </script>
    <script>
        const loadPublications = () => {
            fetch("get_publicaciones.php")
                .then((response) => response.json())
                .then((data) => {
                    publicationCards.innerHTML = ""; // Limpia las tarjetas existentes

                    data.forEach((publication) => {
                        const card = document.createElement("div");
                        card.classList.add("col-md-4", "mb-3");
                        card.innerHTML = `
                    <div class="card">
                        <img src="${publication.imagen}" class="card-img-top" alt="${publication.titulo}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">${publication.titulo}</h5>
                            <p class="card-text">${publication.contenido}</p>
                            <button class="btn btn-primary mt-2 edit-publication-btn" 
                                    data-id="${publication.id}" 
                                    data-title="${publication.titulo}" 
                                    data-content="${publication.contenido}" 
                                    data-image="${publication.imagen}">
                                Editar
                            </button>
                        </div>
                    </div>
                `;
                        publicationCards.appendChild(card);
                    });

                    // Asignar eventos a los botones "Editar"
                    document.querySelectorAll(".edit-publication-btn").forEach((button) => {
                        button.addEventListener("click", () => {
                            const id = button.dataset.id;
                            const title = button.dataset.title;
                            const content = button.dataset.content;
                            const image = button.dataset.image;

                            // Rellenar el modal con los datos de la publicación
                            document.querySelector("#editId").value = id;
                            document.querySelector("#editTitle").value = title;
                            document.querySelector("#editContent").value = content;
                            document.querySelector("#currentImage").value = image;

                            // Mostrar el modal
                            const editModal = new bootstrap.Modal(document.querySelector("#editModal"));
                            editModal.show();
                        });
                    });
                })
                .catch((error) => console.error("Error al cargar publicaciones:", error));
        };
    </script>
    <script>
        document.querySelector("#editForm").addEventListener("submit", function (e) {
            e.preventDefault(); // Evitar que el formulario recargue la página

            const formData = new FormData(this); // Captura los datos del formulario

            fetch("update_publicaciones.php", {
                method: "POST",
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        alert("Publicación actualizada correctamente");
                        location.reload(); // Recargar la página para reflejar los cambios
                    } else {
                        alert("Error al actualizar la publicación: " + data.message);
                    }
                })
                .catch((error) => console.error("Error al actualizar la publicación:", error));
        });
    </script>

    <script>
        document.querySelectorAll(".edit-publication-btn").forEach((button) => {
            button.addEventListener("click", () => {
                const id = button.dataset.id;
                const title = button.dataset.title;
                const content = button.dataset.content;
                const image = button.dataset.image;

                // Rellenar los campos del modal
                document.querySelector("#editId").value = id;
                document.querySelector("#editTitle").value = title;
                document.querySelector("#editContent").value = content;
                document.querySelector("#currentImage").value = image; // Imagen actual

                // Mostrar el modal
                const editModal = new bootstrap.Modal(document.querySelector("#editModal"));
                editModal.show();
            });
        });
    </script>

    <script>
        (function () {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML = "window.__CF$cv$params={r:'8e0ab2c8689f7476',t:'MTczMTI5MDUyOC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/22755d9a86c9/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function () { };
                    document.onreadystatechange = function (b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
    <script>
        document.getElementById("openNewPublicationButton").addEventListener("click", () => {
            const modal = new bootstrap.Modal(document.getElementById("newPublicationModal"));
            modal.show();
        });
    </script>


    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8e0ab2c8689f7476","version":"2024.10.5","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"6e2c2575ac8f44ed824cef7899ba8463","b":1}'
        crossorigin="anonymous">
        </script>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">

    </script>
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

    <script src="../assets.startbootstrap.com/js/sb-customizer.js"></script>
    <sb-customizer project="sb-admin-pro"></sb-customizer>


    <!-- Scripts exclusivos para el área de publicaciones con estilos del index -->
    <script src="../../Assets/template1/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="../../Assets/template1/assets/js/bootstrap.min.js"></script>
    <script src="../../Assets/template1/assets/js/scripts.js"></script>

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
    <script src="../../Assets/template1/assets/js/map.js"></script>
    <script src="../../Assets/template1/assets/js/theme.js"></script>
    <script>

    </script>
    <script>
        data.forEach((publication) => {
            const card = document.createElement("div");
            card.classList.add("col-md-4", "mb-3");
            card.innerHTML = `
        <div class="card">
            <img src="${publication.imagen}" class="card-img-top" alt="${publication.titulo}" style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">${publication.titulo}</h5>
                <p class="card-text">${publication.contenido}</p>
                <button class="btn btn-primary mt-2 edit-publication-btn" 
                        data-id="${publication.id}" 
                        data-title="${publication.titulo}" 
                        data-content="${publication.contenido}"
                        data-image="${publication.imagen}">
                    Editar
                </button>
            </div>
        </div>
    `;
            publicationCards.appendChild(card);
        });
    </script>



</body>


</html>