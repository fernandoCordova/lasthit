<?php
if (isset($_POST['btnRanking'])) {
    session_start();
    include_once('../config/BDConfiguracion.php');
    include_once('../config/ApiConfiguracion.php');
    include_once('../repository/sql/RegionSql.php');
    include_once('../repository/api/InvocadorApi.php');
    $objetoConexion = new BDConfiguracion();
    $objetoApi = new ApiConfiguracion();
    $objetoRegionSql = new RegionSql();
    $objetoInvocadorApi = new InvocadorApi();

    $accionSeleccionada = $_POST['btnRanking'];
    switch ($accionSeleccionada) {
        case 'ranking':
            $conexion = $objetoConexion->obtenerConexion();
            $regiones = $objetoRegionSql->obtenerRegiones($conexion);
            $apikey = $objetoApi->obtenerClaveApi();
            $region = 'LA2';
            $ranking = $objetoInvocadorApi->obtenerRanking($region, $apikey);
            $_SESSION['ranking'] = $ranking;
            $_SESSION['regiones'] = $regiones;
            $_SESSION['region'] = $region;
            header('Location: http://localhost/lasthit/ranking');
            break;
        case 'filtrarPorRegion':
            $regionSeleccionada = $_POST['region'];
            $conexion = $objetoConexion->obtenerConexion();
            $regiones = $objetoRegionSql->obtenerRegiones($conexion);
            $apikey = $objetoApi->obtenerClaveApi();
            $ranking = $objetoInvocadorApi->obtenerRanking($regionSeleccionada, $apikey);
            $_SESSION['ranking'] = $ranking;
            $_SESSION['regiones'] = $regiones;
            $_SESSION['region'] = $regionSeleccionada;
            header('Location: http://localhost/lasthit/ranking');
            break;
    }
} else {
    header('Location: http://localhost/lasthit/invocador');
}
