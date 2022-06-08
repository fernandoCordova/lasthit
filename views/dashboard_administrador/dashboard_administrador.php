<?php
include_once('../layout-admin/header.php');
$cantidadUsuarios = $_SESSION['cantidadUsuarios'];
$cantidadUsuariosAdministradores = $_SESSION['cantidadUsuariosAdministradores'];
$cantidadUsuariosPorMes = $_SESSION['cantidadUsuariosPorMes'];
$cantidadUsuariosPorRegion = $_SESSION['cantidadUsuariosPorRegion'];
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Panel de control</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Panel de control</li>
            </ol>
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            Cantidad de usuarios registrados: <?php echo $cantidadUsuarios['cantidad'] ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            Cantidad de usuarios administradores: <?php echo $cantidadUsuariosAdministradores['cantidad'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Cantidad de usuarios nuevos registrados por mes del año 2022
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="60"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Cantidad de usuarios registrados por servidor
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="60"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        let cantidadUsuariosPorMes = <?php print_r(json_encode($cantidadUsuariosPorMes)) ?>;
        let cantidadUsuariosPorRegion = <?php print_r(json_encode($cantidadUsuariosPorRegion)) ?>;
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="http://localhost/lasthit/assets/demo/chart-area-demo.js"></script>
    <script src="http://localhost/lasthit/assets/demo/chart-bar-demo.js"></script>
    <script src="http://localhost/lasthit/js/plantilla/datatables-simple-demo.js"></script>
    <?php
    include_once('../layout-admin/footer.php');
    ?>