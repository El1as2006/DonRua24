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
                    <div class="fw-500">Documentation</div>
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
            <!-- Alerts Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts"
                    href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i data-feather="bell"></i></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="me-2" data-feather="bell"></i>
                        Alerts Center
                    </h6>
                    <!-- Example Alert 1-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 29, 2021</div>
                            <div class="dropdown-notifications-item-content-text">This is an alert message. It's nothing
                                serious, but it requires your attention.</div>
                        </div>
                    </a>
                    <!-- Example Alert 2-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 22, 2021</div>
                            <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click
                                here to view!</div>
                        </div>
                    </a>
                    <!-- Example Alert 3-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-danger"><i
                                class="fas fa-exclamation-triangle"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 8, 2021</div>
                            <div class="dropdown-notifications-item-content-text">Critical system failure, systems
                                shutting down.</div>
                        </div>
                    </a>
                    <!-- Example Alert 4-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 2, 2021</div>
                            <div class="dropdown-notifications-item-content-text">New user request. Woody has requested
                                access to the organization.</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                </div>
            </li>
            <!-- Messages Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages"
                    href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i data-feather="mail"></i></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="me-2" data-feather="mail"></i>
                        Message Center
                    </h6>
                    <!-- Example Message 1  -->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img"
                            src="assets/img/illustrations/profiles/profile-2.png" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Thomas Wilcox · 58m</div>
                        </div>
                    </a>
                    <!-- Example Message 2-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img"
                            src="assets/img/illustrations/profiles/profile-3.png" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Emily Fowler · 2d</div>
                        </div>
                    </a>
                    <!-- Example Message 3-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img"
                            src="assets/img/illustrations/profiles/profile-4.png" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Marshall Rosencrantz · 3d</div>
                        </div>
                    </a>
                    <!-- Example Message 4-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img"
                            src="assets/img/illustrations/profiles/profile-5.png" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Colby Newton · 3d</div>
                        </div>
                    </a>
                    <!-- Footer Link-->
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                </div>
            </li>
            <!-- User Dropdown-->
            <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                    href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><img class="img-fluid"
                        src="assets/img/illustrations/profiles/profile-1.png" /></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="assets/img/illustrations/profiles/profile-1.png" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">Valerie Luna</div>
                            <div class="dropdown-user-details-email"><a href="cdn-cgi/l/email-protection.html"
                                    class="__cf_email__"
                                    data-cfemail="62140e170c0322030d0e4c010d0f">[email&#160;protected]</a></div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Account
                    </a>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </a>
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
                            Pages
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
                <header class="py-10 mb-4 bg-gradient-primary-to-secondary">
                    <div class="container-xl px-4">
                        <div class="text-center">
                            <h1 class="text-white">Publicaciones</h1>
                            <p class="lead mb-0 text-white-50">Listado de publicaciones del index usuario.</p>
                        </div>
                    </div>
                </header>
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
                <!-- Main page content-->
                <div class="container-xl px-4">
                    <h2 class="mt-5 mb-0">Carrusel 1</h2>
                    <p>Three dashboard examples to get you started!</p>
                    <hr class="mt-0 mb-4" />
                    <div class="row">
                        <?php
                        require_once '../../funcs/conexion.php';
                        $resultado = $conn->query("SELECT titulo, contenido, imagen FROM publicaciones WHERE Tipo_Publicaciones = 0");

                        if ($resultado && $resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $titulo = htmlspecialchars($row['titulo']);
                                $imagen = htmlspecialchars($row['imagen']);
                                $rutaImagen = '../uploads/' . $imagen;
                                ?>
                                <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                                    <a class="d-block lift rounded overflow-hidden mb-2" href="#">
                                        <img class="img-fluid" src="<?php echo $rutaImagen; ?>" alt="<?php echo $titulo; ?>"
                                            onerror="this.src='../../uploads/placeholder.png';" />
                                    </a>
                                    <div class="text-center small"><?php echo $titulo; ?></div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>No hay publicaciones disponibles para Carrusel 1.</p>";
                        }
                        ?>
                    </div>
                    <h2 class="mt-5 mb-0">Carrusel 2</h2>
                    <p>App pages to cover common use pages to help build your app!</p>
                    <hr class="mt-0 mb-4" />
                    <div class="row">
                        <?php
                        $resultado = $conn->query("SELECT titulo, contenido, imagen FROM publicaciones WHERE Tipo_Publicaciones = 1");

                        if ($resultado && $resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $titulo = htmlspecialchars($row['titulo']);
                                $imagen = htmlspecialchars($row['imagen']);
                                $rutaImagen = '../uploads/' . $imagen;
                                ?>
                                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                                    <a class="d-block lift rounded overflow-hidden mb-2" href="#">
                                        <img class="img-fluid" src="<?php echo $rutaImagen; ?>" alt="<?php echo $titulo; ?>"
                                            onerror="this.src='../../uploads/placeholder.png';" />
                                    </a>
                                    <div class="text-center small"><?php echo $titulo; ?></div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>No hay publicaciones disponibles para Carrusel 2.</p>";
                        }
                        ?>
                    </div>


                    <h2 class="mt-5 mb-0">Carrusel 3</h2>
                    <p>Layouts for creating new pages within your project!</p>
                    <hr class="mt-0 mb-4" />
                    <div class="row">
                    <?php
                        require_once '../../funcs/conexion.php';
                        $resultado = $conn->query("SELECT titulo, contenido, imagen FROM publicaciones WHERE Tipo_Publicaciones = 2");

                        if ($resultado && $resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $titulo = htmlspecialchars($row['titulo']);
                                $imagen = htmlspecialchars($row['imagen']);
                                $rutaImagen = '../uploads/' . $imagen;
                                ?>
                                <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                                    <a class="d-block lift rounded overflow-hidden mb-2" href="#">
                                        <img class="img-fluid" src="<?php echo $rutaImagen; ?>" alt="<?php echo $titulo; ?>"
                                            onerror="this.src='../../uploads/placeholder.png';" />
                                    </a>
                                    <div class="text-center small"><?php echo $titulo; ?></div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>No hay publicaciones disponibles para Carrusel 3.</p>";
                        }
                        ?>
                    </div>
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
        crossorigin="anonymous"></script>
</body>
</html>