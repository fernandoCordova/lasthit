<?php
include_once('../layout/header.php');
$invocador = json_decode($_SESSION['invocador']);
$ligas = json_decode($_SESSION['ligas']);
$maestriaPorPersonajes = json_decode($_SESSION['personajes']);
?>
<link rel="stylesheet" href="http://localhost/lasthit/css/buscar_invocador/buscar_invocador.css">
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active boton-tab-detalles-invocador" id="perfil-tab" data-bs-toggle="tab" data-bs-target="#perfil" type="button" role="tab" aria-controls="perfil" aria-selected="true">Perfil</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link boton-tab-detalles-invocador" id="personaje-tab" data-bs-toggle="tab" data-bs-target="#personaje" type="button" role="tab" aria-controls="personaje" aria-selected="false">Personajes</button>
                </li>
                
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">
                    <div class="my-3 text-center">
                        <div class="contenedor-img-invocador">
                            <img src="http://ddragon.leagueoflegends.com/cdn/12.9.1/img/profileicon/<?php echo $invocador->{'profileIconId'} ?>.png" class="img-fluid img-icono-invocador" alt="logo-buscar-invocador" width="150">
                            <div class="nivel-invocador">
                                <?php echo $invocador->{'summonerLevel'} ?>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 mb-5">
                        <h1 class="text-center">
                            <?php echo $invocador->{'name'} ?>
                        </h1>
                    </div>
                    <div class="mx-5 mb-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 bg-dark bordes-card">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="http://localhost/lasthit/img/iconos-ligas/Emblem_<?php echo $ligas[0]->{'tier'} ?>.png" class="img-fluid img-logo-ligas" alt="logo-soloq" width="200">
                                            </div>
                                            <div class="col-md-6 texto-ligas">
                                                <p class="lead my-0">
                                                    Clasificatoria solo/duo
                                                </p>
                                                <p class="lead my-0">
                                                    <?php
                                                    if ($ligas[0]->{'tier'} != "Unranked") {
                                                        echo $ligas[0]->{'tier'} . " " . $ligas[0]->{'rank'};
                                                    } else {
                                                        echo "Sin clasificar";
                                                    }
                                                    ?>
                                                </p>
                                                <p class="lead my-0">
                                                    <?php
                                                    if ($ligas[0]->{'tier'} != "Unranked") {
                                                        echo $ligas[0]->{'leaguePoints'} . "PL / " . $ligas[0]->{'wins'} . "V - " . $ligas[0]->{'losses'} . "L";
                                                    }
                                                    ?>
                                                </p>
                                                <p class="lead my-0">
                                                    <?php
                                                    if ($ligas[0]->{'tier'} != "Unranked") {
                                                        $multiplicacionVictorias = $ligas[0]->{'wins'} * 100;
                                                        $sumaPartidasJugadas = $ligas[0]->{'wins'} + $ligas[0]->{'losses'};
                                                        echo "Winrate " . round(($multiplicacionVictorias / $sumaPartidasJugadas), 0, PHP_ROUND_HALF_UP) . "%";
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 bg-dark bordes-card">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="http://localhost/lasthit/img/iconos-ligas/Emblem_<?php echo $ligas[1]->{'tier'} ?>.png" class="img-fluid img-logo-ligas" alt="logo-soloq" width="200">
                                            </div>
                                            <div class="col-md-6 texto-ligas">
                                                <p class="lead my-0">
                                                    Clasificatoria flexible
                                                </p>
                                                <p class="lead my-0">
                                                    <?php
                                                    if ($ligas[1]->{'tier'} != "Unranked") {
                                                        echo $ligas[1]->{'tier'} . " " . $ligas[1]->{'rank'};
                                                    } else {
                                                        echo "Sin clasificar";
                                                    }
                                                    ?>
                                                </p>
                                                <p class="lead my-0">
                                                    <?php
                                                    if ($ligas[1]->{'tier'} != "Unranked") {
                                                        echo $ligas[1]->{'leaguePoints'} . "PL / " . $ligas[1]->{'wins'} . "V - " . $ligas[1]->{'losses'} . "L";
                                                    }
                                                    ?>
                                                </p>
                                                <p class="lead my-0">
                                                    <?php
                                                    if ($ligas[1]->{'tier'} != "Unranked") {
                                                        $multiplicacionVictorias = $ligas[1]->{'wins'} * 100;
                                                        $sumaPartidasJugadas = $ligas[1]->{'wins'} + $ligas[1]->{'losses'};
                                                        echo "Winrate " . round(($multiplicacionVictorias / $sumaPartidasJugadas), 0, PHP_ROUND_HALF_UP) . "%";
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="personaje" role="tabpanel" aria-labelledby="personaje-tab">
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="contenedor-tablas table-responsive bg-dark">
                                <table id="tablaMejoresPersonajesInvocador" class="table table-bordered border-white table-sm text-center nowrap tabla-personalizada">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Icono</th>
                                            <th>Nivel de maestria</th>
                                            <th>Puntos de maestria</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($maestriaPorPersonajes as $personajes) {
                                        ?>
                                            <tr>
                                                <td><?php echo $personajes->{'idPersonaje'} ?></td>
                                                <td>
                                                    <img src="http://ddragon.leagueoflegends.com/cdn/12.10.1/img/champion/<?php echo $personajes->{'imagen'} ?>" alt="icono-personaje" class="img-fluid" width="40">
                                                </td>
                                                <td><?php echo $personajes->{'nivelDeMaestria'} ?></td>
                                                <td><?php echo $personajes->{'puntosDeMaestria'} ?></td>
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
</div>
<script src="http://localhost/lasthit/js/buscar_invocador/buscar_invocador.js"></script>
<?php
include_once('../layout/footer.php');
?>