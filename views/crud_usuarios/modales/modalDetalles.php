<div class="modal fade" id="modalDetalles<?php echo $usuario['idusuario'] ?>" tabindex="-1" aria-labelledby="modalDetalles" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetalles">Detalles de <?php echo $usuario['nombreInvocador'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <label class="text-primary">ID:</label>
                    <p><?php echo $usuario['idusuario'] ?></p>
                </div>
                <div>
                    <label class="text-primary">Correo:</label>
                    <p><?php echo $usuario['correo'] ?></p>
                </div>
                <div>
                    <label class="text-primary">Clave:</label>
                    <p><?php echo $usuario['clave'] ?></p>
                </div>
                <div>
                    <label class="text-primary">Nombre de invocador:</label>
                    <p><?php echo $usuario['nombreInvocador'] ?></p>
                </div>
                <div>
                    <label class="text-primary">Fecha de registro:</label>
                    <p><?php echo $usuario['create_usuario'] ?></p>
                </div>
                <div>
                    <label class="text-primary">Fecha de actualización:</label>
                    <p><?php echo $usuario['update_usuario'] ?></p>
                </div>
                <div>
                    <label class="text-primary">Tipo de usuario:</label>
                    <p><?php echo $usuario['tipo'] ?></p>
                </div>
                <div>
                    <label class="text-primary">Estado del usuario:</label>
                    <p><?php echo $usuario['estado'] ?></p>
                </div>
                <div>
                    <label class="text-primary">Región:</label>
                    <p><?php echo $usuario['plataforma'] ?></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>