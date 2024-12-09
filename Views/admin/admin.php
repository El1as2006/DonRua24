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
    <title>Administrator Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../Assets/template2/css/styles.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>


<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow justify-content-between navbar-light bg-white" id="sidenavAccordion">
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle">
            <i data-feather="menu"></i>
        </button>
        <a class="navbar-brand pe-3 ps-4 ps-lg-2">DOMINGO SAVIO</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-icon btn-transparent-dark me-3" href="../Login-register/login/logout.php">
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
                    <!-- Gráfica de Publicaciones -->
                    <div class="mt-5">
                        <h3 class="text-center">Gráfica de Publicaciones</h3>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <canvas id="publicacionesPieChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Gráfica de Usuarios -->
                    <div class="mt-5">
                        <h3 class="text-center">Gráfica de Usuarios</h3>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <canvas id="usuariosPieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>


            </main>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
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



    <!---Proceso para hacer que la grafica sea dinamica-->
    <?php

    // Obtén los datos para la gráfica de publicaciones
    $sqlPublicaciones = "SELECT Tipo_Publicaciones, COUNT(*) as cantidad FROM publicaciones GROUP BY Tipo_Publicaciones";
    $resultPublicaciones = $conn->query($sqlPublicaciones);
    $dataPublicaciones = [];
    if ($resultPublicaciones->num_rows > 0) {
        while ($row = $resultPublicaciones->fetch_assoc()) {
            $dataPublicaciones[] = $row;
        }
    }

    // Obtén los datos para la gráfica de usuarios
    $sqlUsuarios = "SELECT user_type, COUNT(*) as cantidad FROM usuarios GROUP BY user_type";
    $resultUsuarios = $conn->query($sqlUsuarios);
    $dataUsuarios = [];
    if ($resultUsuarios->num_rows > 0) {
        while ($row = $resultUsuarios->fetch_assoc()) {
            $dataUsuarios[] = $row;
        }
    }
    ?>
    <script>
        // Datos para la gráfica de publicaciones
        const publicacionesDataFromPHP = <?php echo json_encode($dataPublicaciones); ?>;
        const publicacionesTitles = {
            0: "Sección 1",
            1: "Sección 2",
            2: "Sección 3",
            3: "Sección 4"
        };
        const publicacionesLabels = publicacionesDataFromPHP.map(item => publicacionesTitles[item.Tipo_Publicaciones] || `Tipo ${item.Tipo_Publicaciones}`);
        const publicacionesValues = publicacionesDataFromPHP.map(item => item.cantidad);

        // Configuración para la gráfica de publicaciones
        const publicacionesCtx = document.getElementById('publicacionesPieChart').getContext('2d');
        new Chart(publicacionesCtx, {
            type: 'pie',
            data: {
                labels: publicacionesLabels,
                datasets: [{
                    data: publicacionesValues,
                    backgroundColor: ['#FF6B6B', '#FFD93D', '#6BCB77', '#4D96FF', '#9B59B6'],
                    borderColor: '#FFFFFF',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#4A4A4A',
                            font: {
                                size: 14
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                const label = context.label || '';
                                const value = context.raw || 0;
                                return `${label}: ${value}`;
                            }
                        }
                    }
                }
            }
        });

        // Datos para la gráfica de usuarios
        const usuariosDataFromPHP = <?php echo json_encode($dataUsuarios); ?>;
        const usuariosTitles = {
            1: "Administrador",
            0: "Usuario",
            2: "Desactivado"
        };
        const usuariosLabels = usuariosDataFromPHP.map(item => usuariosTitles[item.user_type] || `Tipo ${item.user_type}`);
        const usuariosValues = usuariosDataFromPHP.map(item => item.cantidad);

        // Configuración para la gráfica de usuarios
        const usuariosCtx = document.getElementById('usuariosPieChart').getContext('2d');
        new Chart(usuariosCtx, {
            type: 'pie',
            data: {
                labels: usuariosLabels,
                datasets: [{
                    data: usuariosValues,
                    backgroundColor: ['#FF6B6B', '#FFD93D', '#6BCB77', '#4D96FF', '#9B59B6'],
                    borderColor: '#FFFFFF',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#4A4A4A',
                            font: {
                                size: 14
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                const label = context.label || '';
                                const value = context.raw || 0;
                                return `${label}: ${value}`;
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>