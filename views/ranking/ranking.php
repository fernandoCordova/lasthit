<?php
include_once('../layout/header.php');
if (isset($_SESSION['ranking'])) {
$ranking = json_decode($_SESSION['ranking'])->{'entries'};
$regiones = $_SESSION['regiones'];
?>
<link rel="stylesheet" href="http://localhost/lasthit/css/ranking/ranking.css">
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="card bg-dark bordes-card mb-5">
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <img src="https://i.ibb.co/SPkfqXY/pngegg.png" class="img-fluid" alt="logo-buscar-invocador" width="150">
                    </div>
                    <div class="mb-4">
                        <h1 class="text-center">Mejores jugadores de <?php echo $_SESSION['region'] ?></h1>
                    </div>
                    <div class="mx-5">
                        <div>
                            <form action="http://localhost/lasthit/controladorRanking" method="post">
                                <select class="form-select" name="region">
                                    <?php foreach ($regiones as $region) { ?>
                                        <option value="<?php echo $region['plataforma'] ?>">
                                            <?php echo $region['plataforma'] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <button type="submit" class="btn btn-primary" name="btnRanking" value="filtrarPorRegion">Filtrar</button>
                            </form>
                        </div>
                        <div class="contenedor-tablas table-responsive">
                            <table id="tablaRankingJugadores" class="table table-bordered border-dark table-sm text-center nowrap tabla-personalizada">
                                <thead>
                                    <tr>
                                        <th>Nombre de invocador</th>
                                        <th>Puntos de liga</th>
                                        <th>Victorias</th>
                                        <th>Derrotas</th>
                                        <th>Winrate</th>
                                        <th>Liga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($ranking as $ranking) {
                                    ?>
                                        <tr>
                                            <td><?php echo $ranking->{'summonerName'} ?></td>
                                            <td><?php echo $ranking->{'leaguePoints'} ?></td>
                                            <td><?php echo $ranking->{'wins'} ?></td>
                                            <td><?php echo $ranking->{'losses'} ?></td>

                                            <td>
                                                <?php
                                                $multiplicacionVictorias = $ranking->{'wins'} * 100;
                                                $sumaPartidasJugadas = $ranking->{'wins'} + $ranking->{'losses'};
                                                echo "Winrate " . round(($multiplicacionVictorias / $sumaPartidasJugadas), 0, PHP_ROUND_HALF_UP) . "%";
                                                ?>
                                            </td>
                                            <td>Challenger</td>
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
<script src="http://localhost/lasthit/js/ranking/ranking.js"></script>
<?php
    include_once('../layout/footer.php');
} else {
?>
    <meta http-equiv="refresh" content="0;url=http://localhost/lasthit/inicio">
<?php
}

?>