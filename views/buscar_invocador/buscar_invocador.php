<?php
include_once('../layout/header.php');
if (isset($_SESSION['regiones'])) {
    $regiones = $_SESSION['regiones'];
?>
    <link rel="stylesheet" href="http://localhost/lasthit/css/buscar_invocador/buscar_invocador.css">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card bg-dark bordes-card">
                    <div class="card-body">
                        <div class="my-3 text-center">
                            <img src="https://i.ibb.co/2FnKq00/pngkey-com-league-of-legends-png-136239.png" class="img-fluid" alt="logo-buscar-invocador" width="450">
                        </div>
                        <div class="my-4">
                            <h1 class="text-center">Buscar invocador</h1>
                        </div>
                        <div class="mx-5">
                            <label for="nombreInvocador" class="col-form-label-lg">Ingrese el nombre de invocador</label>
                            <form action="http://localhost/lasthit/controladorInvocador" method="post">
                                <div class="input-group mb-3">
                                    <select class="btn boton-select-region form-control-lg" type="button" name="region">
                                        <?php foreach ($regiones as $region) { ?>
                                            <option value="<?php echo $region['plataforma'] ?>">
                                                <?php echo $region['plataforma'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    <input type="text" class="form-control form-control-lg" placeholder="drakma" name="nombreInvocador">
                                    <button class="btn boton-general form-control-lg" name="btnBuscarInvocador" value="detallesInvocador">Buscar jugador</button>
                                </div>
                            </form>
                            <?php if (isset($_SESSION['error'])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php
                                    print_r($_SESSION['error']);
                                    unset($_SESSION['error']);
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost/lasthit/js/buscar_invocador/buscar_invocador.js"></script>
<?php
    include_once('../layout/footer.php');
} else {
?>
    <meta http-equiv="refresh" content="0;url=http://localhost/lasthit/inicio">
<?php
}

?>