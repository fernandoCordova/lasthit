<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="fernandoc" />
    <meta name="author" content="fernandoc" />
    <title>LASTHIT | Panel de control</title>
    <link rel="icon" href="https://i.ibb.co/6YpRC0m/favicon-min.png">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="http://localhost/lasthit/css/plantilla/styles.css" rel="stylesheet" />
    <link href="http://localhost/lasthit/css/plantilla/plantilla-administrador-personalizada.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">LASTHIT</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </div>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <form action="http://localhost/lasthit/controladorInicio" method="post">
                        <li>
                            <button class="dropdown-item" name="btnInicio" value="inicio">Volver a LASTHIT</button>
                        </li>
                    </form>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <form action="http://localhost/lasthit/controladorLogin" method="post">
                        <li>
                            <button class="dropdown-item" name="btnInicioSesion" value="cerrarSesion">Cerrar sesión</button>
                        </li>
                    </form>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Panel de control</div>
                        <form action="http://localhost/lasthit/controladorDashboardAdministrador" method="POST">
                            <button class="nav-link enlace-personalizado" type="submit" name="btnDashboard" value="dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Panel de control
                            </button>
                        </form>
                        <div class="sb-sidenav-menu-heading">Modulos</div>
                        <form action="http://localhost/lasthit/controladorCrudUsuarios" method="POST">
                            <button class="nav-link enlace-personalizado" type="submit" name="btnCrudUsuarios" value="crudUsuarios">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                CRUD usuarios
                            </button>
                        </form>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logeado como:</div>
                    <?php echo $_SESSION['usuario']['nombreInvocador'] ?>
                </div>
            </nav>
        </div>