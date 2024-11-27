<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include '../../funcs/conexion.php';

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
    <title>Dashboard Cleaned</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../Assets/template2/css/styles.css" rel="stylesheet" />

</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow justify-content-between navbar-light bg-white" id="sidenavAccordion">
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle">
            <i data-feather="menu"></i>
        </button>
        <a class="navbar-brand pe-3 ps-4 ps-lg-2">DOMINGO SAVIO</a>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <div class="sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="admin.php">
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Dashboards
                        </a>
                        <a class="nav-link" href="publicaciones.php">
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Publicaciones
                        </a>
                        <div class="sidenav-menu-heading">Custom</div>
                        <a class="nav-link" href="pages.html">
                            <div class="nav-link-icon"><i data-feather="grid"></i></div>
                            Pages
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
                            <h1 class="page-header-title">Dashboard</h1>
                            <div class="page-header-subtitle">Example dashboard overview and content summary</div>
                        </div>
                    </div>
                </header>
                <div class="container-xl px-4 mt-n10">
                    <div class="row">
                        <div class="col-xl-4 mb-4">
                            <a class="card lift h-100" href="#!">
                                <div class="card-body d-flex justify-content-center flex-column">
                                    <i class="feather-xl text-primary mb-3" data-feather="package"></i>
                                    <h5>Powerful Components</h5>
                                    <div class="text-muted small">To create informative visual elements</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 mb-4">
                            <a class="card lift h-100" href="#!">
                                <div class="card-body d-flex justify-content-center flex-column">
                                    <i class="feather-xl text-secondary mb-3" data-feather="book"></i>
                                    <h5>Documentation</h5>
                                    <div class="text-muted small">To keep you on track with our toolkit</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 mb-4">
                            <a class="card lift h-100" href="#!">
                                <div class="card-body d-flex justify-content-center flex-column">
                                    <i class="feather-xl text-green mb-3" data-feather="layout"></i>
                                    <h5>Pages & Layouts</h5>
                                    <div class="text-muted small">To help get you started with your new UI</div>
                                </div>
                            </a>
                        </div>
                    </div>

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
                                <i data-feather="log-out"></i>
                                SALIDA
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
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancelar</button>
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

            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
    <!-- Scripts exclusivos para el área de publicaciones con estilos del index -->
    <script src="../../Assets/template1/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="../../Assets/template1/assets/js/bootstrap.min.js"></script>
    <script src="../../Assets/template1/assets/js/scripts.js"></script>


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

        // Show/Hide the publication card
        const newPublicationButton = document.querySelector('.new-publication-button');
        const publicationCard = document.getElementById('publicationCard');
        const overlay = document.getElementById('overlay');
        const closeCard = document.getElementById('closeCard');

        newPublicationButton.addEventListener('click', () => {
            publicationCard.style.display = 'block';
            overlay.style.display = 'block';
        });

        closeCard.addEventListener('click', () => {
            publicationCard.style.display = 'none';
            overlay.style.display = 'none';
        });

        overlay.addEventListener('click', () => {
            publicationCard.style.display = 'none';
            overlay.style.display = 'none';
        });
        document.getElementById('newPublicationBtn').addEventListener('click', function () {
            const modal = new bootstrap.Modal(document.getElementById('newPublicationModal'));
            modal.show();
        });
    </script>
</body>

</html>