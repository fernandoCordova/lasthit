<?php
if (isset($_POST['btnBuscarInvocador'])) {
    session_start();
    include_once('../config/BDConfiguracion.php');
    include_once('../config/ApiConfiguracion.php');
    include_once('../repository/sql/RegionSql.php');
    include_once('../repository/api/InvocadorApi.php');
    include_once('../repository/api/PersonajeApi.php');
    $objetoConexion = new BDConfiguracion();
    $objetoApi = new ApiConfiguracion();
    $objetoRegionSql = new RegionSql();
    $objetoInvocadorApi = new InvocadorApi();
    $objetoPersonajeApi = new PersonajeApi();
    $accionSeleccionada = $_POST['btnBuscarInvocador'];
    switch ($accionSeleccionada) {
        case 'buscarInvocador':
            $conexion = $objetoConexion->obtenerConexion();
            $regiones = $objetoRegionSql->obtenerRegiones($conexion);
            $_SESSION['regiones'] = $regiones;
            header('Location: http://localhost/lasthit/invocador');
            break;
        case 'detallesInvocador':
            $apikey = $objetoApi->obtenerClaveApi();
            $invocador = $objetoInvocadorApi->obtenerInvocador($_POST['region'], str_replace(' ', '', $_POST['nombreInvocador']), $apikey);
            $personajes = $objetoPersonajeApi->obtenerPersonajes();
            if (isset(json_decode($invocador)->{'status'}->{'status_code'})) {
                $_SESSION['error'] = 'No se encontro el invocador';
                header('Location: http://localhost/lasthit/invocador');
            } else {
                $idInvocador = json_decode($invocador)->{'id'};
                $ligasInvocador = $objetoInvocadorApi->obtenerLigas($_POST['region'], $idInvocador, $apikey);
                $maestriaDePersonajes = $objetoInvocadorApi->obtenerPersonajesPorInvocador($_POST['region'], $idInvocador, $apikey, $personajes);
                $_SESSION['invocador'] = $invocador;
                $_SESSION['ligas'] = $ligasInvocador;
                $_SESSION['personajes'] = $maestriaDePersonajes;
                header('Location: http://localhost/lasthit/invocador/detalles/' . json_decode($invocador)->{'name'});
            }
            break;
    }
} else {
    header('Location: http://localhost/lasthit/invocador');
}
