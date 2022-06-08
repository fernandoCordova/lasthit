<?php
if (isset($_POST['btnDashboard'])) {
    session_start();
    include_once('../repository/sql/UsuarioSql.php');
    include_once('../config/BDConfiguracion.php');
    $objetoUsuarioSql = new UsuarioSql();
    $objetoConexion = new BDConfiguracion();
    $conexion = $objetoConexion->obtenerConexion();
    $accionSeleccionada = $_POST['btnDashboard'];
    switch ($accionSeleccionada) {
        case 'dashboard':
            $cantidadUsuarios = $objetoUsuarioSql->obtenerCantidadUsuariosRegistrados($conexion);
            $cantidadUsuariosAdministradores = $objetoUsuarioSql->obtenerCantidadDeUsuariosAdministradores($conexion);
            $cantidadUsuariosPorMes = $objetoUsuarioSql->obtenerCantidadDeUsuariosPorMes($conexion);
            $cantidadUsuariosPorRegion = $objetoUsuarioSql->obtenerCantidadDeUsuariosPorServidor($conexion);
            $_SESSION['cantidadUsuarios'] = $cantidadUsuarios;
            $_SESSION['cantidadUsuariosAdministradores'] = $cantidadUsuariosAdministradores;
            $_SESSION['cantidadUsuariosPorMes'] = $cantidadUsuariosPorMes;
            $_SESSION['cantidadUsuariosPorRegion'] = $cantidadUsuariosPorRegion;
            header('Location: http://localhost/lasthit/dashboard/administrador/');
            break;
    }
} else {
    header('Location: http://localhost/lasthit/inicio');
}
