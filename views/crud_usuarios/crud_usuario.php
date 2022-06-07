<?php
include_once('../layout-admin/header.php');
if (isset($_SESSION['usuarios'])) {
    $usuarios = $_SESSION['usuarios'];
    $estados = $_SESSION['estados'];
    $tiposUsuarios = $_SESSION['tiposUsuarios'];
    $regiones = $_SESSION['regiones'];
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">CRUD usuarios</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">
                        <form action="http://localhost/lasthit/controladorDashboardAdministrador" method="POST">
                            <button class="breadcrumb-item enlace-personalizado" type="submit" name="btnDashboard" value="dashboard">
                                Panel de control
                            </button>
                        </form>
                    </li>
                    <li class="breadcrumb-item enlace-personalizado active">
                        <button class="breadcrumb-item enlace-personalizado" disabled>
                            CRUD usuarios
                        </button>
                    </li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary">Ingresar nuevo usuario</button>
                        <button type="button" class="btn btn-success">Exportar tabla a excel</button>
                    </div>
                    <?php if (isset($_SESSION['error'])) { ?>
                        <div class="alert alert-danger my-2" role="alert">
                            <?php
                            print_r($_SESSION['error']);
                            unset($_SESSION['error']);
                            ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($_SESSION['exito'])) { ?>
                        <div class="alert alert-success my-2" role="alert">
                            <?php
                            print_r($_SESSION['exito']);
                            unset($_SESSION['exito']);
                            ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Usuarios registrados
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>correo</th>
                                    <th>Nombre de invocador</th>
                                    <th>Tipo de usuario</th>
                                    <th>Estado</th>
                                    <th>Region</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($usuarios as $usuario) {
                                ?>
                                    <tr>
                                        <td><?php echo $usuario['idusuario'] ?></td>
                                        <td><?php echo $usuario['correo'] ?></td>
                                        <td><?php echo $usuario['nombreInvocador'] ?></td>
                                        <td><?php echo $usuario['tipo'] ?></td>
                                        <td><?php echo $usuario['estado'] ?></td>
                                        <td><?php echo $usuario['plataforma'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar<?php echo $usuario['idusuario'] ?>">
                                                Modificar
                                            </button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetalles<?php echo $usuario['idusuario'] ?>">
                                                Detalles
                                            </button>
                                            <button type="button" class="btn btn-danger">Eliminar</button>
                                        </td>
                                    </tr>
                                    <?php
                                    include('modalDetalles.php');
                                    include('modalEditar.php');
                                    ?>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="http://localhost/lasthit/js/plantilla/datatables-simple-demo.js"></script>
    <?php
    include_once('../layout-admin/footer.php');
}
    ?>