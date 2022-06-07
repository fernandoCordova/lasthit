<div class="modal fade" id="modalEditar<?php echo $usuario['idusuario'] ?>" tabindex="-1" aria-labelledby="modalEditar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditar">Editar datos del usuario <?php echo $usuario['nombreInvocador'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="http://localhost/lasthit/controladorCrudUsuarios" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="idusuario" value="<?php echo $usuario['idusuario'] ?>">
                    <div class="form-group">
                        <label for="correo">correo</label>
                        <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $usuario['correo'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="clave">clave</label>
                        <input type="text" class="form-control" id="clave" name="clave" value="<?php echo $usuario['clave'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nombreInvocador">Nombre de invocador</label>
                        <input type="text" class="form-control" id="nombreInvocador" name="nombreInvocador" value="<?php echo $usuario['nombreInvocador'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado del usuario</label>
                        <select class="form-control" name="estado" id="estado">
                            <?php
                            foreach ($estados as $estado) {
                            ?>
                                <option value="<?php echo $estado['idestado']; ?>">
                                    <?php echo $estado['estado']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipoUsuario">Tipo de usuario</label>
                        <select class="form-control" name="tipoUsuario" id="tipoUsuario">
                            <?php
                            foreach ($tiposUsuarios as $tipo) {
                            ?>
                                <option value="<?php echo $tipo['idtipoUsuario']; ?>">
                                    <?php echo $tipo['tipo']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="region">Región de usuario</label>
                        <select class="form-control" name="region" id="region">
                            <?php
                            foreach ($regiones as $region) {
                            ?>
                                <option value="<?php echo $region['plataforma']; ?>">
                                    <?php echo $region['plataforma']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar ventana</button>
                        <button type="submit" name="btnCrudUsuarios" value="editarUsuario" class="btn btn-success">Guardar cambios</button>
                    </div>
            </form>
        </div>
    </div>
</div>