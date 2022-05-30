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
                                    <img src="https://i.ibb.co/M6tBMnh/pngwing-com.png" class="img-fluid" alt="logo-buscar-invocador" width="250">
                                </div>
                                <h3 class="text-center font-weight-light my-4">Inicio de sesión</h3>
                                <form>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="correo" type="email" placeholder="correo@correo.com" />
                                        <label for="correo" class="label-personalizado">Correo</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="clave" type="password" placeholder="Contraseña" />
                                        <label for="clave" class="label-personalizado">Contraseña</label>
                                    </div>
                                    
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small enlace-personalizado" href="restaurar_clave">¿Olvidaste tu contraseña?</a>
                                        <a class="btn boton-general" href="dashboard/administrador/">Ingresar</a>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="registro" class="enlace-personalizado">¿Necesitas una cuenta? Registrate ahora!</a></div>
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