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
    <title>Overview - SB Admin Pro</title>
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
    <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
        id="sidenavAccordion">
        <!-- Sidenav Toggle Button-->
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i
                data-feather="menu"></i></button>
        <!-- Navbar Brand-->
        <!-- * * Tip * * You can use text or an image for your navbar brand.-->
        <!-- * * * * * * When using an image, we recommend the SVG format.-->
        <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
        <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="index.html">SB Admin Pro</a>
        <!-- Navbar Search Input-->
        <!-- * * Note: * * Visible only on and above the lg breakpoint-->
        <form class="form-inline me-auto d-none d-lg-block me-3">
            <div class="input-group input-group-joined input-group-solid">
                <input class="form-control pe-0" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-text"><i data-feather="search"></i></div>
            </div>
        </form>
        <!-- Navbar Items-->
        <ul class="navbar-nav align-items-center ms-auto">
            <!-- Documentation Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-md-block me-3">
                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="fw-500">Cuenta</div>
                    <i class="fas fa-chevron-right dropdown-arrow"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0 me-sm-n15 me-lg-0 o-hidden animated--fade-in-up"
                    aria-labelledby="navbarDropdownDocs">
                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro" target="_blank">
                        <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="book"></i></div>
                        <div>
                            <div class="small text-gray-500">Documentation</div>
                            Usage instructions and reference
                        </div>
                    </a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/components"
                        target="_blank">
                        <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="code"></i></div>
                        <div>
                            <div class="small text-gray-500">Components</div>
                            Code snippets and reference
                        </div>
                    </a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/changelog"
                        target="_blank">
                        <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="file-text"></i></div>
                        <div>
                            <div class="small text-gray-500">Changelog</div>
                            Updates and changes
                        </div>
                    </a>
                </div>
            </li>
            <!-- Navbar Search Dropdown-->
            <!-- * * Note: * * Visible only below the lg breakpoint-->
            <li class="nav-item dropdown no-caret me-3 d-lg-none">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        data-feather="search"></i></a>
                <!-- Dropdown - Search-->
                <div class="dropdown-menu dropdown-menu-end p-3 shadow animated--fade-in-up"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline me-auto w-100">
                        <div class="input-group input-group-joined input-group-solid">
                            <input class="form-control pe-0" type="text" placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2" />
                            <div class="input-group-text"><i data-feather="search"></i></div>
                        </div>
                    </form>
                </div>
            </li>

        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <!-- Sidenav Menu Heading (Account)-->
                        <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                        <div class="sidenav-menu-heading d-sm-none">Account</div>
                        <!-- Sidenav Link (Alerts)-->
                        <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                        <a class="nav-link d-sm-none" href="#!">
                            <div class="nav-link-icon"><i data-feather="bell"></i></div>
                            Alerts
                            <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                        </a>
                        <!-- Sidenav Link (Messages)-->
                        <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                        <a class="nav-link d-sm-none" href="#!">
                            <div class="nav-link-icon"><i data-feather="mail"></i></div>
                            Messages
                            <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                        </a>
                        <!-- Sidenav Menu Heading (Core)-->
                        <div class="sidenav-menu-heading">Core</div>
                        <!-- Sidenav Accordion (Dashboard)-->
                        <a class="nav-link collapsed" href="admin.php" data-bs-toggle="collapse"
                            data-bs-target="#collapseDashboards" aria-expanded="false"
                            aria-controls="collapseDashboards">
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Dashboards
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                <a class="nav-link" href="dashboard-1.html">
                                    Default
                                    <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                                </a>
                                <a class="nav-link" href="dashboard-2.html">Multipurpose</a>
                                <a class="nav-link" href="dashboard-3.html">Affiliate</a>
                            </nav>
                        </div>
                        <!-- Sidenav Accordion (Pages)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="nav-link-icon"><i data-feather="grid"></i></div>
                            Publicaciones
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                <!-- Nested Sidenav Accordion (Pages -> Account)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAccount" aria-expanded="false"
                                    aria-controls="pagesCollapseAccount">
                                    Account
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAccount"
                                    data-bs-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="account-profile.html">Profile</a>
                                        <a class="nav-link" href="account-billing.html">Billing</a>
                                        <a class="nav-link" href="account-security.html">Security</a>
                                        <a class="nav-link" href="account-notifications.html">Notifications</a>
                                    </nav>
                                </div>
                                <!-- Nested Sidenav Accordion (Pages -> Authentication)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth"
                                    data-bs-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                                        <!-- Nested Sidenav Accordion (Pages -> Authentication -> Basic)-->
                                        <a class="nav-link collapsed" href="javascript:void(0);"
                                            data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthBasic"
                                            aria-expanded="false" aria-controls="pagesCollapseAuthBasic">
                                            Basic
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseAuthBasic"
                                            data-bs-parent="#accordionSidenavPagesAuth">
                                            <nav class="sidenav-menu-nested nav">
                                                <a class="nav-link" href="auth-login-basic.html">Login</a>
                                                <a class="nav-link" href="auth-register-basic.html">Register</a>
                                                <a class="nav-link" href="auth-password-basic.html">Forgot Password</a>
                                            </nav>
                                        </div>
                                        <!-- Nested Sidenav Accordion (Pages -> Authentication -> Social)-->
                                        <a class="nav-link collapsed" href="javascript:void(0);"
                                            data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthSocial"
                                            aria-expanded="false" aria-controls="pagesCollapseAuthSocial">
                                            Social
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseAuthSocial"
                                            data-bs-parent="#accordionSidenavPagesAuth">
                                            <nav class="sidenav-menu-nested nav">
                                                <a class="nav-link" href="auth-login-social.html">Login</a>
                                                <a class="nav-link" href="auth-register-social.html">Register</a>
                                                <a class="nav-link" href="auth-password-social.html">Forgot Password</a>
                                            </nav>
                                        </div>
                                    </nav>
                                </div>
                                <!-- Nested Sidenav Accordion (Pages -> Error)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError"
                                    data-bs-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="error-400.html">400 Error</a>
                                        <a class="nav-link" href="error-401.html">401 Error</a>
                                        <a class="nav-link" href="error-403.html">403 Error</a>
                                        <a class="nav-link" href="error-404-1.html">404 Error 1</a>
                                        <a class="nav-link" href="error-404-2.html">404 Error 2</a>
                                        <a class="nav-link" href="error-500.html">500 Error</a>
                                        <a class="nav-link" href="error-503.html">503 Error</a>
                                        <a class="nav-link" href="error-504.html">504 Error</a>
                                    </nav>
                                </div>
                                <a class="nav-link" href="pricing.html">Pricing</a>
                                <a class="nav-link" href="invoice.html">Invoice</a>
                            </nav>
                        </div>
                        <!-- Sidenav Accordion (Applications)-->
                        <div class="collapse" id="collapseApps" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavAppsMenu">
                                <!-- Nested Sidenav Accordion (Apps -> Knowledge Base)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#appsCollapseKnowledgeBase" aria-expanded="false"
                                    aria-controls="appsCollapseKnowledgeBase">
                                    Knowledge Base
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="appsCollapseKnowledgeBase"
                                    data-bs-parent="#accordionSidenavAppsMenu">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="knowledge-base-home-1.html">Home 1</a>
                                        <a class="nav-link" href="knowledge-base-home-2.html">Home 2</a>
                                        <a class="nav-link" href="knowledge-base-category.html">Category</a>
                                        <a class="nav-link" href="knowledge-base-article.html">Article</a>
                                    </nav>
                                </div>
                                <!-- Nested Sidenav Accordion (Apps -> User Management)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#appsCollapseUserManagement" aria-expanded="false"
                                    aria-controls="appsCollapseUserManagement">
                                    User Management
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="appsCollapseUserManagement"
                                    data-bs-parent="#accordionSidenavAppsMenu">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="user-management-list.html">Users List</a>
                                        <a class="nav-link" href="user-management-edit-user.html">Edit User</a>
                                        <a class="nav-link" href="user-management-add-user.html">Add User</a>
                                        <a class="nav-link" href="user-management-groups-list.html">Groups List</a>
                                        <a class="nav-link" href="user-management-org-details.html">Organization
                                            Details</a>
                                    </nav>
                                </div>
                                <!-- Nested Sidenav Accordion (Apps -> Posts Management)-->
                            </nav>
                        </div>
                        <!-- Sidenav Accordion (Flows)-->
                    </div>
                </div>
                <!-- Sidenav Footer-->
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
                            <button class="new-publication-button">
                                <i data-feather="file-plus"></i>
                                NUEVA PUBLICACIÓN
                            </button>
                            <button class="new-publication-button">
                                <i data-feather="edit-3"></i>
                                EDITAR
                            </button>
                            <button class="new-publication-button">
                                <i data-feather="trash-2"></i>
                                ELIMINAR
                            </button>
                            <button class="new-publication-button">
                                <i data-feather="eye"></i>
                                VER
                            </button>
                        </div>
                    </div>

                    <!-- Card for Nueva Publicación -->
                    <div class="overlay" id="overlay"></div>
                    <div class="publication-card" id="publicationCard">
                        <button class="close-btn" id="closeCard">&times;</button>
                        <h5>Nueva Publicación</h5>
                        <form action="add.php" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
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
                                        <option value="0">Seccion 1</option>
                                        <option value="1">Seccion 2</option>
                                        <option value="2">Seccion 3</option>
                                        <option value="3">Seccion 4</option>
                                        <!-- Agrega más sectores según lo que necesites -->
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Subir Imagen</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*"
                                        required>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <button type="button" class="btn btn-secondary" id="botoncancelar">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Card for Editar -->
                <div class="overlay" id="editCardOverlay"></div>
                <div class="publication-card" id="editCard">
                    <button class="close-btn" id="closeEditCard">&times;</button>
                    <h5>Editar</h5>
                    <form>
                        <div class="form-group">
                            <label for="editTitle">Título</label>
                            <input type="text" id="editTitle" class="form-control" placeholder="Editar el título">
                        </div>
                        <div class="form-group">
                            <label for="editContent">Contenido</label>
                            <textarea id="editContent" class="form-control"
                                placeholder="Editar el contenido"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </div>
                    </form>
                </div>

                <!-- Card for Eliminar -->
                <div class="overlay" id="deleteCardOverlay"></div>
                <div class="publication-card" id="deleteCard">
                    <button class="close-btn" id="closeDeleteCard">&times;</button>
                    <h5>Eliminar</h5>
                    <p>¿Estás seguro de que deseas eliminar este elemento?</p>
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-danger">Eliminar</button>
                        <button type="button" class="btn btn-secondary" id="cancelDelete">Cancelar</button>
                    </div>
                </div>

                <!-- Card for Ver -->
                <div class="overlay" id="viewCardOverlay"></div>
                <div class="publication-card" id="viewCard">
                    <button class="close-btn" id="closeViewCard">&times;</button>
                    <h5>Detalles</h5>
                    <p>Aquí se mostrarán los detalles del elemento seleccionado.</p>
                </div>


                <!-- Main page content-->
                <div class="container-xl px-4">



                    <!-------------------------------------------------- publicaciones 1 -------------------------------------------------->

                    <h2 class="mt-5 mb-0">Sección 1</h2>

                    <hr class="mt-0 mb-4" />
                    <div class="row">
                        <div class="witr_pslide3 all_pslides_color ps1 ps3 service_active">
                            <div class="witr_cslide3_idany service_top">
                                <?php
                                require_once '../../funcs/conexion.php';

                                // Consulta para obtener las publicaciones con Tipo_Publicaciones = 0 (máximo 2)
                                $sql = "SELECT titulo, contenido, imagen FROM publicaciones WHERE Tipo_Publicaciones = 0 LIMIT 2";
                                $resultado = $conn->query($sql);

                                $imagenes = [null, null]; // Array para mantener las publicaciones (dos posiciones)
                                $index = 1; // Para numeración dinámica
                                
                                if ($resultado && $resultado->num_rows > 0) {
                                    $i = 0; // Índice para el array de imágenes
                                    while ($i < 2 && $row = $resultado->fetch_assoc()) {
                                        $imagenes[$i] = [
                                            'titulo' => htmlspecialchars($row['titulo']),
                                            'contenido' => htmlspecialchars($row['contenido']),
                                            'imagen' => '../uploads/' . htmlspecialchars($row['imagen']),
                                        ];
                                        $i++;
                                    }
                                }

                                // Generar las dos posiciones, sean dinámicas o con marcador
                                for ($i = 0; $i < 2; $i++) {
                                    if (!empty($imagenes[$i])) {
                                        $titulo = $imagenes[$i]['titulo'];
                                        $contenido = $imagenes[$i]['contenido'];
                                        $imagePath = $imagenes[$i]['imagen'];

                                        echo '<div class="item_pos col-lg-12">';
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
                                        // Mostrar un marcador indicando que la imagen ha sido eliminada
                                        echo '<div class="item_pos col-lg-12">';
                                        echo '    <div class="witr_single_pslide">';
                                        echo '        <div class="witr_pslide_image">';
                                        echo '            <img src="../uploads/placeholder.png" alt="Imagen eliminada" class="img-fluid">';
                                        echo '        </div>';
                                        echo '        <div class="witr_content_pslide_text">';
                                        echo '            <div class="witr_number_pslide">';
                                        echo '                <h4>' . sprintf("%02d.", $index) . '</h4>'; // Número dinámico
                                        echo '            </div>';
                                        echo '            <div class="witr_content_pslide">';
                                        echo '                <p>Esta publicación fue eliminada.</p>';
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


                    <!-------------------------------------------------- publicaciones 2 -------------------------------------------------->
                    <h2 class="mt-5 mb-0">Sección 2</h2>

                    <hr class="mt-0 mb-4" />
                    <div class="row">
                        <div class="witr_pslide3 all_pslides_color ps1 ps3 service_active">
                            <div class="witr_cslide3_idany service_top">
                                <?php
                                require_once '../../funcs/conexion.php';

                                // Consulta para obtener las publicaciones con Tipo_Publicaciones = 1 (máximo 5)
                                $sql = "SELECT titulo, contenido, imagen FROM publicaciones WHERE Tipo_Publicaciones = 1 LIMIT 5";
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

                                        echo '<div class="item_pos col-sm-6 col-md-4 col-xl-3 mb-4">';
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
                                        echo '<div class="item_pos col-sm-6 col-md-4 col-xl-3 mb-4">';
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
                    <h2 class="mt-5 mb-0">Sección 3</h2>

                    <hr class="mt-0 mb-4" />
                    <div class="row">
                        <div class="witr_pslide3 all_pslides_color ps1 ps3 service_active">
                            <div class="witr_cslide3_idany service_top">
                                <?php
                                require_once '../../funcs/conexion.php';

                                // Consulta para obtener las publicaciones con Tipo_Publicaciones = 2 (máximo 3)
                                $sql = "SELECT titulo, contenido, imagen FROM publicaciones WHERE Tipo_Publicaciones = 2 LIMIT 3";
                                $resultado = $conn->query($sql);

                                $imagenes = [null, null, null]; // Array para mantener las 3 publicaciones
                                $index = 1; // Para numeración dinámica
                                
                                if ($resultado && $resultado->num_rows > 0) {
                                    $i = 0; // Índice para el array de imágenes
                                    while ($i < 3 && $row = $resultado->fetch_assoc()) {
                                        $imagenes[$i] = [
                                            'titulo' => htmlspecialchars($row['titulo'] ?? 'Título no disponible'),
                                            'contenido' => htmlspecialchars($row['contenido'] ?? 'Contenido no disponible'),
                                            'imagen' => '../uploads/' . htmlspecialchars($row['imagen'] ?? 'placeholder.png'),
                                        ];
                                        $i++;
                                    }
                                }

                                // Generar las 3 posiciones, sean dinámicas o con marcador
                                for ($i = 0; $i < 3; $i++) {
                                    if (!empty($imagenes[$i])) {
                                        $titulo = $imagenes[$i]['titulo'];
                                        $contenido = $imagenes[$i]['contenido'];
                                        $imagePath = $imagenes[$i]['imagen'];

                                        echo '<div class="item_pos col-md-4 mb-4">';
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
                                        echo '<div class="item_pos col-md-4 mb-4">';
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

                    <!-------------------------------------------------- publicaciones 4-------------------------------------------------->
                    <!-------------------------------------------------- publicaciones 4 -------------------------------------------------->
                    <h2 class="mt-5 mb-0">Sección 4</h2>
                    <hr class="mt-0 mb-4" />
                    <div class="row">
                        <div class="witr_pslide3 all_pslides_color ps1 ps3 service_active">
                            <div class="witr_cslide3_idany service_top">
                                <?php
                                require_once '../../funcs/conexion.php';

                                // Consulta para obtener las publicaciones con Tipo_Publicaciones = 3 (máximo 6)
                                $sql = "SELECT titulo, imagen FROM publicaciones WHERE Tipo_Publicaciones = 3 LIMIT 6";
                                $resultado = $conn->query($sql);

                                $imagenes = [null, null, null, null, null, null]; // Array para mantener las 6 publicaciones
                                $index = 1; // Para numeración dinámica
                                
                                if ($resultado && $resultado->num_rows > 0) {
                                    $i = 0; // Índice para el array de imágenes
                                    while ($i < 6 && $row = $resultado->fetch_assoc()) {
                                        $imagenes[$i] = [
                                            'titulo' => htmlspecialchars($row['titulo'] ?? 'Título no disponible'),
                                            'imagen' => '../uploads/' . htmlspecialchars($row['imagen'] ?? 'placeholder.png'),
                                        ];
                                        $i++;
                                    }
                                }

                                // Generar las 6 posiciones, sean dinámicas o con marcador
                                for ($i = 0; $i < 6; $i++) {
                                    if (!empty($imagenes[$i])) {
                                        $titulo = $imagenes[$i]['titulo'];
                                        $imagePath = $imagenes[$i]['imagen'];

                                        echo '<div class="item_pos col-md-4 mb-4">';
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
                                        // Mostrar un marcador indicando que el espacio está disponible
                                        echo '<div class="item_pos col-md-4 mb-4">';
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
                                    $index++; // Incrementar el número
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!---------------------------------------------------------------------------- publicaciones 5---------------------------------------------------------------------------->
                    <!-------------------------------------------------- publicaciones 5 -------------------------------------------------->
<h2 class="mt-5 mb-0">Sección 5</h2>
<hr class="mt-0 mb-4" />
<div class="row">
    <div class="witr_pslide3 all_pslides_color ps1 ps3 service_active">
        <div class="witr_cslide3_idany service_top">
            <?php
            require_once '../../funcs/conexion.php';

            // Consulta para obtener las publicaciones con Tipo_Publicaciones = 4 (máximo 4)
            $sql = "SELECT titulo, imagen FROM publicaciones WHERE Tipo_Publicaciones = 4 LIMIT 4";
            $resultado = $conn->query($sql);

            $imagenes = [null, null, null, null]; // Array para mantener las 4 publicaciones
            $index = 1; // Para numeración dinámica

            if ($resultado && $resultado->num_rows > 0) {
                $i = 0; // Índice para el array de imágenes
                while ($i < 4 && $row = $resultado->fetch_assoc()) {
                    $imagenes[$i] = [
                        'titulo' => htmlspecialchars($row['titulo'] ?? 'Título no disponible'),
                        'imagen' => '../uploads/' . htmlspecialchars($row['imagen'] ?? 'placeholder.png'),
                    ];
                    $i++;
                }
            }

            // Generar las 4 posiciones, sean dinámicas o con marcador
            for ($i = 0; $i < 4; $i++) {
                if (!empty($imagenes[$i])) {
                    $titulo = $imagenes[$i]['titulo'];
                    $imagePath = $imagenes[$i]['imagen'];

                    echo '<div class="item_pos col-md-3 mb-4">'; // Ajuste para 4 elementos por fila
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
                    // Mostrar un marcador indicando que el espacio está disponible
                    echo '<div class="item_pos col-md-3 mb-4">'; // Ajuste para 4 elementos por fila
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
                $index++; // Incrementar el número
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
        function abrirModal() {
            // Mostrar el modal usando Bootstrap
            const modal = new bootstrap.Modal(document.getElementById('newPublicationModal'));
            modal.show();
        }
    </script>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

    <script src="../assets.startbootstrap.com/js/sb-customizer.js"></script>
    <sb-customizer project="sb-admin-pro"></sb-customizer>

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
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8e0ab2c8689f7476","version":"2024.10.5","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"6e2c2575ac8f44ed824cef7899ba8463","b":1}'
        crossorigin="anonymous">
        </script>


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



</body>


</html>