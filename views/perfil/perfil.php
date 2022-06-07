<?php
include_once('../layout/header.php');
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $regiones = $_SESSION['regiones'];
?>
    <link rel="stylesheet" href="http://localhost/lasthit/css/perfil/perfil.css">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card bg-dark bordes-card mb-5">
                    <div class="card-body">
                        <div class="mb-4 text-center">
                            <img src="https://i.ibb.co/LPK8LZg/alistar-min.png" class="img-fluid" alt="logo-buscar-invocador" width="250">
                        </div>
                        <div class="mb-4">
                            <h1 class="text-center">Configuracion de perfil</h1>
                        </div>
                        <div class="mx-5">
                            <div class="contenedor-tablas mb-4">
                                <h5>Cambiar contraseña</h5>
                                <form action="http://localhost/lasthit/controladorPerfil" method="POST">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="correo" class="text-white">Contraseña actual</label>
                                            <input class="form-control" type="text" placeholder="Contraseña" name="clave" />
                                        </div>
                                        <div class="col-6">
                                            <label for="clave" class="text-white">Nueva contraseña</label>
                                            <input class="form-control" type="text" placeholder="Contraseña" name="nuevaClave" />
                                        </div>
                                    </div>
                                    <?php if (isset($_SESSION['errorClave'])) { ?>
                                        <div class="alert alert-danger my-2" role="alert">
                                            <?php
                                            print_r($_SESSION['errorClave']);
                                            unset($_SESSION['errorClave']);
                                            ?>
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_SESSION['exitoClave'])) { ?>
                                        <div class="alert alert-success my-2" role="alert">
                                            <?php
                                            print_r($_SESSION['exitoClave']);
                                            unset($_SESSION['exitoClave']);
                                            ?>
                                        </div>
                                    <?php } ?>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn boton-general" name="btnPerfil" value="cambiarClave">
                                            Cambiar contraseña
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="contenedor-tablas mb-4">
                                <h5>Cambiar nombre de invocador</h5>
                                <form action="http://localhost/lasthit/controladorPerfil" method="POST">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="nombreInvocador" class="text-white">Nombre de invocador actual</label>
                                            <input class="form-control" id="nombreInvocador" type="text" value="<?php echo $usuario['nombreInvocador'] ?>" disabled />
                                            <input type="hidden" name="nombreInvocador" value="<?php echo $usuario['nombreInvocador'] ?>">
                                        </div>
                                        <div class="col-4">
                                            <label for="nuevoNombreInvocador" class="text-white">Nuevo nombre de invocador</label>
                                            <input class="form-control" id="nuevoNombreInvocador" name="nuevoNombreInvocador" type="text" placeholder="222222222222" />
                                        </div>
                                        <div class=" col-4">
                                            <label for="clave" class="text-white">Contraseña</label>
                                            <input class="form-control" id="clave" name="clave" type="password" placeholder="Contraseña" />
                                        </div>
                                    </div>
                                    <?php if (isset($_SESSION['errorInvocador'])) { ?>
                                        <div class="alert alert-danger my-2" role="alert">
                                            <?php
                                            print_r($_SESSION['errorInvocador']);
                                            unset($_SESSION['errorInvocador']);
                                            ?>
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_SESSION['exitoInvocador'])) { ?>
                                        <div class="alert alert-success my-2" role="alert">
                                            <?php
                                            print_r($_SESSION['exitoInvocador']);
                                            unset($_SESSION['exitoInvocador']);
                                            ?>
                                        </div>
                                    <?php } ?>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn boton-general" type="submit" name="btnPerfil" value="cambiarNombreInvocador">
                                            Cambiar nombre de invocador
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="contenedor-tablas mb-4">
                                <h5>Cambiar region</h5>
                                <form action="http://localhost/lasthit/controladorPerfil" method="POST">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="plataforma" class="text-white">Region actual</label>
                                            <input class="form-control" id="plataforma" type="text" value="<?php echo $usuario['plataforma'] ?>" disabled />
                                            <input type="hidden" name="plataforma" value="<?php echo $usuario['plataforma'] ?>">
                                        </div>
                                        <div class="col-4">
                                            <label for="nuevaRegion" class="text-white">Nueva region</label>
                                            <select class="form-control" id="nuevaPlataforma" name="nuevaPlataforma">
                                                <?php foreach ($regiones as $region) { ?>
                                                    <option value="<?php echo $region['plataforma'] ?>">
                                                        <?php echo $region['plataforma'] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label for="clave" class="text-white">Contraseña</label>
                                            <input class="form-control" name="clave" id="clave" type="password" placeholder="Contraseña" />
                                        </div>
                                    </div>
                                    <?php if (isset($_SESSION['errorRegion'])) { ?>
                                        <div class="alert alert-danger my-2" role="alert">
                                            <?php
                                            print_r($_SESSION['errorRegion']);
                                            unset($_SESSION['errorRegion']);
                                            ?>
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_SESSION['exitoRegion'])) { ?>
                                        <div class="alert alert-success my-2" role="alert">
                                            <?php
                                            print_r($_SESSION['exitoRegion']);
                                            unset($_SESSION['exitoRegion']);
                                            ?>
                                        </div>
                                    <?php } ?>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn boton-general" type="submit" name="btnPerfil" value="cambiarRegion">
                                            Cambiar región
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost/lasthit/js/perfil/perfil.js"></script>
<?php
    include_once('../layout/footer.php');
} else {
?>
    <meta http-equiv="refresh" content="0;url=http://localhost/lasthit/inicio">
<?php
}

?>