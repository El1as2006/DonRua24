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
    <title>Admisiones</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../Assets/template2/css/styles.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- tabla jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluye DataTables CSS y JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

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
                        <a class="nav-link" href="users.php">
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Usuarios
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
                            <h1 class="page-header-title">Tabla Solicitudes de admisión</h1>
                            <div class="page-header-subtitle"></div>
                        </div>
                    </div>
                </header>
                <div class="container mt-5">
                    <h1 class="text-center">Lista de Usuarios</h1>
                    <div class="table-responsive"
                        style="max-width: 100%; margin: auto; background-color: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                        <table id="tablaUsuarios" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Completo</th>
                                    <th>Edad</th>
                                    <th>Sexo</th>
                                    <th>Nacionalidad</th>
                                    <th>Teléfono de contacto</th>
                                    <th>Correo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT id_admision, nombre, edad, sexo, nacionalidad, tel_contacto, correo FROM admisiones";
                                $result = $conn->query(query: $sql);

                                // Genera las filas de la tabla
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {

                                        echo "<tr>
                                                <td>{$row['id_admision']}</td>
                                                <td>{$row['nombre']}</td>
                                                <td>{$row['edad']}</td>
                                                <td>{$row['sexo']}</td>
                                                <td>{$row['nacionalidad']}</td>
                                                <td>{$row['tel_contacto']}</td>
                                                <td>{$row['correo']}</td>
                                            </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='7'>No hay usuarios registrados.</td></tr>";
                                }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
    </div>
    <script>
        // Inicializa DataTables
        $(document).ready(function () {
            $('#tablaUsuarios').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
                }
            });
        });
    </script>
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
</body>
</html>