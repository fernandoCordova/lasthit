<?php
session_start();
if (!isset($_SESSION['objetos'])) {
    header('Location: http://localhost/lasthit/inicio');
} else {
    unset($_SESSION['objetoEspecifico']);
    unset($_SESSION['idObjeto']);
    include_once('../layout/header.php');
    $objetos = json_decode($_SESSION['objetos'])->{'data'};
?>
    <link rel="stylesheet" href="http://localhost/lasthit/css/buscar_objetos/buscar_objetos.css">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card bg-dark bordes-card mb-5">
                    <div class="card-body">
                        <div class="mb-4 text-center">
                            <img src="https://i.ibb.co/68nFvYg/pngwing-com.png" class="img-fluid" alt="logo-buscar-invocador" width="250">
                        </div>
                        <div class="mb-4">
                            <h1 class="text-center">Buscar objetos</h1>
                        </div>
                        <div class="mx-5">
                            <div class="contenedor-tablas table-responsive">
                                <table id="tablaBuscarObjetos" class="table table-bordered border-dark table-sm text-center nowrap tabla-personalizada">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>icono</th>
                                            <th>Detalles</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($objetos as $objeto) {
                                        ?>
                                            <tr>
                                                <td><?php echo $objeto->{'name'} ?></td>
                                                <td>
                                                    <img src="http://ddragon.leagueoflegends.com/cdn/12.10.1/img/item/<?php echo $objeto->{'image'}->{'full'} ?>" alt="icono-personaje" class="img-fluid" width="40">
                                                </td>
                                                <td>
                                                    <form action="http://localhost/lasthit/controladorObjetos" method="post">
                                                        <input type="hidden" name="idObjeto" value="<?php echo  $objeto->{'name'} ?>">
                                                        <button class="btn boton-general" name="btnBuscarObjeto" value="detallesObjeto">Ver detalles</button>
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
    <script src="http://localhost/lasthit/js/buscar_objetos/buscar_objetos.js"></script>
<?php
    include_once('../layout/footer.php');
}
?>