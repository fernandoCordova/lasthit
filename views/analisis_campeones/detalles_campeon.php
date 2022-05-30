<?php
session_start();
if (!isset($_SESSION['personajeEspecifico']) || !isset($_SESSION['idPersonaje'])) {
    header('Location: http://localhost/lasthit/campeon');
} else {
    include_once('../layout/header.php');
    $personaje = json_decode($_SESSION['personajeEspecifico'])->{'data'}->{$_SESSION['idPersonaje']};
?>
    <link rel="stylesheet" href="http://localhost/lasthit/css/analisis_campeones/analisis_campeones.css">
    <div class="container my-1 p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 bordes-card bg-dark contenedor-tarjeta-analisis-personaje tarjeta-titulo">
                        <h3>
                            <?php echo $personaje->{'title'} ?>
                        </h3>
                    </div>
                    <div class="col-md-4 bordes-card bg-dark contenedor-tarjeta-analisis-personaje p-2">
                        <div class="contenedor-informacion">
                            <img alt="icono-personaje" src="http://ddragon.leagueoflegends.com/cdn/12.10.1/img/champion/<?php echo $personaje->{'image'}->{'full'} ?>" class="rounded-circle img-fluid" />
                            <h1 class="text-center">
                                <?php echo $personaje->{'name'} ?>
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-4 bordes-card bg-dark contenedor-tarjeta-analisis-personaje">
                        <h4>
                            Tipo: <?php echo $personaje->{'partype'} ?>
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 bordes-card bg-dark p-3">
                        <h3>
                            Consejos generales
                        </h3>
                        <ul>
                            <?php foreach ($personaje->{'allytips'} as $consejos) { ?>
                                <li class="list-item texto-justificado">
                                    <?php echo $consejos; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-md-4 bordes-card bg-dark p-3">
                        <h3>
                            Historia
                        </h3>
                        <p class="texto-justificado">
                            <?php echo $personaje->{'lore'} ?>
                        </p>
                    </div>
                    <div class="col-md-4 bordes-card bg-dark p-3">
                        <h3>
                            Consejos enemigos
                        </h3>
                        <ul>
                            <?php foreach ($personaje->{'enemytips'} as $consejos) { ?>
                                <li class="list-item texto-justificado">
                                    <?php echo $consejos; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 bordes-card bg-dark habilidades-personajes">
                                <h3>
                                    Habilidad con la Q
                                </h3>
                                <img alt="icono-personaje" src="http://ddragon.leagueoflegends.com/cdn/12.10.1/img/spell/<?php echo $personaje->{'spells'}[0]->{'image'}->{'full'} ?>" class="rounded-circle img-fluid" />
                                <h5 class="my-0 nombre-habilidad"><?php echo $personaje->{'spells'}[0]->{'name'} ?></h5>
                                <p class="my-0 costos-habilidad">Enfriamientos (en segundos) por nivel: <?php echo $personaje->{'spells'}[0]->{'cooldownBurn'} ?></p>
                                <p class="my-0 costos-habilidad">Costo de la habilidad: <?php echo $personaje->{'spells'}[0]->{'costBurn'} ?></p>
                                <p class="my-0 costos-habilidad">Rango de la habilidad: <?php echo $personaje->{'spells'}[0]->{'rangeBurn'} ?></p>
                                <p class="my-0 descripcion-habilidad"><?php echo $personaje->{'spells'}[0]->{'description'} ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 bordes-card bg-dark habilidades-personajes">
                                <h3>
                                    Habilidad con la R
                                </h3>
                                <img alt="icono-personaje" src="http://ddragon.leagueoflegends.com/cdn/12.10.1/img/spell/<?php echo $personaje->{'spells'}[3]->{'image'}->{'full'} ?>" class="rounded-circle img-fluid" />
                                <h5 class="my-0 nombre-habilidad"><?php echo $personaje->{'spells'}[3]->{'name'} ?></h5>
                                <p class="my-0 costos-habilidad">Enfriamientos (en segundos) por nivel: <?php echo $personaje->{'spells'}[3]->{'cooldownBurn'} ?></p>
                                <p class="my-0 costos-habilidad">Costo de la habilidad: <?php echo $personaje->{'spells'}[3]->{'costBurn'} ?></p>
                                <p class="my-0 costos-habilidad">Rango de la habilidad: <?php echo $personaje->{'spells'}[3]->{'rangeBurn'} ?></p>
                                <p class="my-0 descripcion-habilidad"><?php echo $personaje->{'spells'}[1]->{'description'} ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 bordes-card bg-dark habilidades-personajes">
                                <h3>
                                    Habilidad con la W
                                </h3>
                                <img alt="icono-personaje" src="http://ddragon.leagueoflegends.com/cdn/12.10.1/img/spell/<?php echo $personaje->{'spells'}[1]->{'image'}->{'full'} ?>" class="rounded-circle img-fluid" />
                                <h5 class="my-0 nombre-habilidad"><?php echo $personaje->{'spells'}[1]->{'name'} ?></h5>
                                <p class="my-0 costos-habilidad">Enfriamientos (en segundos) por nivel: <?php echo $personaje->{'spells'}[1]->{'cooldownBurn'} ?></p>
                                <p class="my-0 costos-habilidad">Costo de la habilidad: <?php echo $personaje->{'spells'}[1]->{'costBurn'} ?></p>
                                <p class="my-0 costos-habilidad">Rango de la habilidad: <?php echo $personaje->{'spells'}[1]->{'rangeBurn'} ?></p>
                                <p class="my-0 descripcion-habilidad"><?php echo $personaje->{'spells'}[1]->{'description'} ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 bordes-card bg-dark habilidades-personajes">
                                <h3>
                                    Habilidad pasiva
                                </h3>
                                <img alt="icono-personaje" src="http://ddragon.leagueoflegends.com/cdn/12.10.1/img/passive/<?php echo $personaje->{'passive'}->{'image'}->{'full'} ?>" class="rounded-circle img-fluid" />
                                <h5 class="my-0 nombre-habilidad"><?php echo $personaje->{'passive'}->{'name'} ?></h5>
                                <p class="my-0 descripcion-habilidad"><?php echo $personaje->{'passive'}->{'description'} ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 bordes-card bg-dark habilidades-personajes">
                                <h3>
                                    Habilidad con la E
                                </h3>
                                <img alt="icono-personaje" src="http://ddragon.leagueoflegends.com/cdn/12.10.1/img/spell/<?php echo $personaje->{'spells'}[2]->{'image'}->{'full'} ?>" class="rounded-circle img-fluid" />
                                <h5 class="my-0 nombre-habilidad"><?php echo $personaje->{'spells'}[2]->{'name'} ?></h5>
                                <p class="my-0 costos-habilidad">Enfriamientos (en segundos) por nivel: <?php echo $personaje->{'spells'}[2]->{'cooldownBurn'} ?></p>
                                <p class="my-0 costos-habilidad">Costo de la habilidad: <?php echo $personaje->{'spells'}[2]->{'costBurn'} ?></p>
                                <p class="my-0 costos-habilidad">Rango de la habilidad: <?php echo $personaje->{'spells'}[2]->{'rangeBurn'} ?></p>
                                <p class="my-0 descripcion-habilidad"><?php echo $personaje->{'spells'}[2]->{'description'} ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 bordes-card bg-dark">
                                <h3>
                                    Estadisticas base
                                </h3>
                                <ul>
                                    <?php foreach ($personaje->{'stats'} as $estadistica => $valor) { ?>
                                        <li class="list-item">
                                            <?php print_r($estadistica . ': ' . $valor); ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-md-12 bordes-card bg-dark">
                        <h3 class="mt-3 text-center">
                            Aspectos del personaje
                        </h3>
                        <div id="carouselExampleControls" class="carousel slide p-5" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/<?php print_r($personaje->{'id'}) ?>_<?php print_r($personaje->{'skins'}[0]->{'num'}) ?>.jpg" class="d-block w-100 rounded-3" alt="aspecto-por-defecto">
                                </div>
                                <?php
                                for ($i = 1; $i < count($personaje->{'skins'}); $i++) {
                                ?>
                                    <div class="carousel-item">
                                        <img src="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/<?php print_r($personaje->{'id'}) ?>_<?php print_r($personaje->{'skins'}[$i]->{'num'}) ?>.jpg" class="d-block w-100 rounded-3" alt="otros-aspectos">
                                    </div>
                                <?php } ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost/lasthit/js/analisis_campeones/analisis_campeones.js"></script>
<?php
    include_once('../layout/footer.php');
}
?>