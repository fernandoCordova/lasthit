<?php
session_start();
if (!isset($_SESSION['objetoEspecifico']) || !isset($_SESSION['idObjeto'])) {
    header('Location: http://localhost/lasthit/objeto');
} else {
    include_once('../layout/header.php');
    $objeto = json_decode($_SESSION['objetoEspecifico'])[0];
?>
    <link rel="stylesheet" href="http://localhost/lasthit/css/buscar_objetos/buscar_objetos.css">
    <div class="container my-1 p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 bordes-card bg-dark contenedor-tarjeta-analisis-objeto tarjeta-titulo">
                        <h5>
                            <?php echo $objeto->{'plaintext'} ?>
                        </h5>
                    </div>
                    <div class="col-md-4 bordes-card bg-dark contenedor-tarjeta-analisis-objeto p-2">
                        <div class="contenedor-informacion text-center">
                            <img alt="icono-personaje" src="http://ddragon.leagueoflegends.com/cdn/12.10.1/img/item/<?php echo $objeto->{'image'}->{'full'} ?>" class="rounded-circle img-fluid" />
                            <h1>
                                <?php echo $objeto->{'name'} ?>
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-4 bordes-card bg-dark contenedor-tarjeta-analisis-objeto pt-3">
                        <ul>
                            <?php
                            for ($i = 0; $i < count($objeto->{'tags'}); $i++) {
                            ?>
                                <li class="list-item texto-justificado">
                                    <h5><?php echo $objeto->{'tags'}[$i] ?></h5>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 bordes-card bg-dark p-3">
                        <h3>
                            Se puede convertir en:
                        </h3>
                        <?php
                        if (array_key_exists('into', $objeto)) {
                            for ($i = 0; $i < count($objeto->{'into'}); $i++) {
                        ?>
                                <img alt="icono-personaje" src="http://ddragon.leagueoflegends.com/cdn/12.10.1/img/item/<?php echo $objeto->{'into'}[$i] ?>.png" class="rounded-circle img-fluid" width="50" />
                        <?php
                            }
                        } else {
                            echo 'No se puede convertir en otro objeto';
                        }
                        ?>

                    </div>
                    <div class="col-md-4 bordes-card bg-dark p-3">
                        <h3>
                            Descripción
                        </h3>
                        <p class="texto-justificado">
                            <?php echo $objeto->{'description'} ?>
                        </p>
                    </div>
                    <div class="col-md-4 bordes-card bg-dark p-3">
                        <h3>
                            Precios
                        </h3>
                        <ul>
                            <li class="list-item texto-justificado">
                                Precio base: <?php echo $objeto->{'gold'}->{'base'} ?>
                            </li>
                            <li class="list-item texto-justificado">
                                Total: <?php echo $objeto->{'gold'}->{'total'} ?>
                            </li>
                            <li class="list-item texto-justificado">
                                Se vende por: <?php echo $objeto->{'gold'}->{'sell'} ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost/lasthit/js/buscar_objetos/buscar_objetos.js"></script>
<?php
    include_once('../layout/footer.php');
}
?>