<?php
include_once('../layout/header.php');
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
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
                                <form>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="correo" class="text-white">Contraseña actual</label>
                                            <input class="form-control" id="correo" type="password" placeholder="Contraseña" />
                                        </div>
                                        <div class="col-6">
                                            <label for="clave" class="text-white">Nueva contraseña</label>
                                            <input class="form-control" id="clave" type="password" placeholder="Contraseña" />
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="btn boton-general" href="dashboard/administrador/">Cambiar contraseña</a>
                                    </div>
                                </form>
                            </div>
                            <div class="contenedor-tablas mb-4">
                                <h5>Cambiar nombre de invocador</h5>
                                <form>
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="correo" class="text-white">Nombre de invocador actual</label>
                                            <input class="form-control" id="correo" type="text" placeholder="drakma" value="drakma" disabled />
                                        </div>
                                        <div class="col-4">
                                            <label for="correo" class="text-white">Nuevo nombre de invocador</label>
                                            <input class="form-control" id="correo" type="text" placeholder="222222222222" />
                                        </div>
                                        <div class=" col-4">
                                            <label for="clave" class="text-white">Contraseña</label>
                                            <input class="form-control" id="clave" type="password" placeholder="Contraseña" />
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="btn boton-general" href="dashboard/administrador/">Cambiar nombre de invocador</a>
                                    </div>
                                </form>
                            </div>
                            <div class="contenedor-tablas mb-4">
                                <h5>Cambiar region</h5>
                                <form>
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="correo" class="text-white">Region actual</label>
                                            <select class="form-control" id="correo" type="text" placeholder="drakma" disabled>
                                                <option value="" selected>LAS</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label for="correo" class="text-white">Nueva region</label>
                                            <select class="form-control" id="correo" type="text" placeholder="drakma">
                                                <option value="" selected>LAS</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label for="clave" class="text-white">Contraseña</label>
                                            <input class="form-control" id="clave" type="password" placeholder="Contraseña" />
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="btn boton-general" href="dashboard/administrador/">Cambiar region</a>
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