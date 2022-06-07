<div class="modal fade" id="modalCrearUsuario" tabindex="-1" aria-labelledby="modalCrearUsuario" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCrearUsuario">Crear usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="http://localhost/lasthit/controladorCrudUsuarios" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" type="mail" name="correo" placeholder="correo@correo.com" />
                                <label for="correo" class="label-personalizado">Ingrese el correo</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" type="text" name="nombreInvocador" placeholder="Drakma" />
                                <label for="nombreInvocador" class="label-personalizado">Nombre de invocador</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3 mb-md-0">
                                <select class="form-control" name="region">
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
                        <div class="col-md-12">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" type="text" name="clave" placeholder="Ingrese una contraseña" />
                                <label for="inputPassword" class="label-personalizado">Contraseña</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar ventana</button>
                <button type="submit" name="btnCrudUsuarios" value="agregarUsuario" class="btn btn-primary">Guardar cambios</button>
            </div>
            </form>
        </div>
    </div>
</div>