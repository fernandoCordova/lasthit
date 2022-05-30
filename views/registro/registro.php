<?php
include_once('../layout/header.php');
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
                                    <img src="https://i.ibb.co/G94yfsv/toppng-com-ersonagens-de-lol-png-teemo-transparent-601x575.png" class="img-fluid" alt="logo-buscar-invocador" width="250">
                                </div>
                                <h3 class="text-center font-weight-light my-4">Registro de usuarios</h3>
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                <label for="inputFirstName" class="label-personalizado">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                <label for="inputLastName" class="label-personalizado">Last name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                        <label for="inputEmail" class="label-personalizado">Email address</label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                                <label for="inputPassword" class="label-personalizado">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                <label for="inputPasswordConfirm" class="label-personalizado">Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><a class="btn boton-general btn-block" href="login">Crear cuenta</a></div>
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
?>