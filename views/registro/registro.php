<?php
include_once('../layout/header.php');
if (isset($_SESSION['regiones'])) {
$regiones = $_SESSION['regiones'];
?>
<link rel="stylesheet" href="http://localhost/lasthit/css/registro/registro.css">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card rounded-lg mt-5 bg-dark bordes-card">
                            <div class="card-body">
                                <div class="mb-4 text-center">
                                    <img src="https://i.ibb.co/dLFbq8W/teemo-min.png" class="img-fluid" alt="logo-buscar-invocador" width="250">
                                </div>
                                <h3 class="text-center font-weight-light my-4">Registro de usuarios</h3>
                                <form action="http://localhost/lasthit/controladorRegistro" method="POST">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" type="mail" name="correo" placeholder="correo@correo.com" />
                                                <label for="correo" class="label-personalizado">Ingrese su correo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" type="text" name="nombreInvocador" placeholder="Drakma" />
                                                <label for="nombreInvocador" class="label-personalizado">Nombre de invocador</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <select class="form-control" name="region" placeholder="Confirm password">
                                                    <?php foreach ($regiones as $region) { ?>
                                                        <option value="<?php echo $region['plataforma'] ?>">
                                                            <?php echo $region['plataforma'] ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                <label for="inputPasswordConfirm" class="label-personalizado">Región</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" type="text" name="clave" placeholder="Ingrese una contraseña" />
                                                <label for="inputPassword" class="label-personalizado">Contraseña</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" type="text" name="confirmacionClave" placeholder="Confirm password" />
                                                <label for="inputPasswordConfirm" class="label-personalizado">Confirmar contraseña</label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (isset($_SESSION['error'])) { ?>
                                        <div class="alert alert-danger my-2" role="alert">
                                            <?php
                                            print_r($_SESSION['error']);
                                            unset($_SESSION['error']);
                                            ?>
                                        </div>
                                    <?php } ?>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <button class="btn boton-general btn-block" type="submit" name="btnRegistro" value="registrarse">Crear cuenta</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="login" class="enlace-personalizado">¿Ya tienes cuenta? Inicia sesión aqui</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="http://localhost/lasthit/js/registro/registro.js"></script>
<?php
    include_once('../layout/footer.php');
} else {
?>
    <meta http-equiv="refresh" content="0;url=http://localhost/lasthit/inicio">
<?php
}

?>