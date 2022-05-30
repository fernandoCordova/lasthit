<?php
include_once('../layout/header.php');
?>
<link rel="stylesheet" href="http://localhost/lasthit/css/inicio_sesion/inicio_sesion.css">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card rounded-lg mt-5 bg-dark bordes-card">
                            <div class="card-body">
                                <div class="mb-4 text-center">
                                    <img src="https://i.ibb.co/dfJ9071/pngegg.png" class="img-fluid" alt="logo-buscar-invocador" width="350">
                                </div>
                                <h3 class="text-center font-weight-light my-4">Cambio de contraseña</h3>
                                <form>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="correo" type="email" placeholder="correo@correo.com" />
                                        <label for="correo" class="label-personalizado">Ingrese su nombre de usuario</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="correo" type="email" placeholder="correo@correo.com" />
                                        <label for="correo" class="label-personalizado">Ingrese su nueva contraseña</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="correo" type="email" placeholder="correo@correo.com" />
                                        <label for="correo" class="label-personalizado">Ingrese de nuevo su contraseña</label>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><a class="btn boton-general btn-block" href="login">Enviar correo de restauracion</a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="http://localhost/lasthit/js/inicio_sesion/inicio_sesion.js"></script>
<?php
include_once('../layout/footer.php');
?>