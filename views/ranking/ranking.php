<?php
include_once('../layout/header.php');
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
                        <h1 class="text-center">Mejores jugadores de LA2</h1>
                    </div>
                    <div class="mx-5">
                        <div class="contenedor-tablas table-responsive">
                            <table id="tablaRankingJugadores" class="table table-bordered border-dark table-sm text-center nowrap tabla-personalizada">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011-04-25</td>
                                        <td>$320,800</td>
                                    </tr>
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
?>