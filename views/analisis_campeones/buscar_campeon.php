<?php
include_once('../layout/header.php');
if (isset($_SESSION['personajes'])) {
$personajes = json_decode($_SESSION['personajes'])->{'data'};
?>
    <link rel="stylesheet" href="http://localhost/lasthit/css/analisis_campeones/analisis_campeones.css">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card bg-dark bordes-card mb-5">
                    <div class="card-body">
                        <div class="mb-4 text-center">
                            <img src="https://i.ibb.co/m45cLbT/pngegg.png" class="img-fluid" alt="logo-buscar-invocador" width="250">
                        </div>
                        <div class="mb-4">
                            <h1 class="text-center">Buscar personajes</h1>
                        </div>
                        <div class="mx-5">
                            <div class="contenedor-tablas table-responsive">
                                <table id="tablaBuscarPersonajes" class="table table-bordered border-dark table-sm text-center nowrap tabla-personalizada">
                                    <thead>
                                        <tr>
                                            <th>Personaje</th>
                                            <th>Imagen</th>
                                            <th>Titulo</th>
                                            <th>Tags</th>
                                            <th>Detalles</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($personajes as $personaje) {
                                        ?>
                                            <tr>
                                                <td><?php echo $personaje->{'name'} ?></td>
                                                <td>
                                                    <img src="http://ddragon.leagueoflegends.com/cdn/12.10.1/img/champion/<?php echo $personaje->{'image'}->{'full'} ?>" alt="icono-personaje" class="img-fluid" width="40">
                                                </td>
                                                <td><?php echo $personaje->{'title'} ?></td>
                                                <td>
                                                    <?php
                                                    for ($i = 0; $i < 1; $i++) {
                                                    ?>
                                                        <?php print_r($personaje->{'tags'}[0]) ?>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <form action="http://localhost/lasthit/controladorCampeones" method="post">
                                                        <input type="hidden" name="idPersonaje" value="<?php echo $personaje->{'id'} ?>">
                                                        <button class="btn boton-general" name="btnBuscarPersonaje" value="detallesCampeon">Ver detalles</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost/lasthit/js/analisis_campeones/analisis_campeones.js"></script>
<?php
    include_once('../layout/footer.php');
} else {
?>
    <meta http-equiv="refresh" content="0;url=http://localhost/lasthit/inicio">
<?php
}

?>