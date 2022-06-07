<?php
if (isset($_POST['btnInicioSesion'])) {
    session_start();
    include_once('../repository/sql/UsuarioSql.php');
    include_once('../config/BDConfiguracion.php');
    $objetoUsuarioSql = new UsuarioSql();
    $objetoConexion = new BDConfiguracion();
    $accionSeleccionada = $_POST['btnInicioSesion'];
    switch ($accionSeleccionada) {
        case 'index':
            header('Location: http://localhost/lasthit/login');
            break;
        case 'cerrarSesion':
            session_destroy();
            header('Location: http://localhost/lasthit/inicio');
            break;
        case 'validarUsuario':
            $conexion = $objetoConexion->obtenerConexion();
            $validarExistenciaUsuario = $objetoUsuarioSql->validarUsuarioLogin($_POST['correo'], $_POST['clave'], $conexion);
            $validarEstadoUsuario = $objetoUsuarioSql->validarEstadoUsuario($validarExistenciaUsuario['idusuario'], $conexion);
            if ($validarExistenciaUsuario['cantidadUsuarios'] == 1) {
                if ($validarEstadoUsuario['cantidadUsuarios'] == 1) {
                    $usuario = $objetoUsuarioSql->obtenerUsuario($validarExistenciaUsuario['idusuario'], $conexion);
                    $_SESSION['usuario'] = $usuario;
                    header('Location: http://localhost/lasthit/inicio');
                } else {
                    $_SESSION['error'] = 'El usuario ingresado no se encuentra disponible, porfavor pongase en contacto con <strong>servicio@lasthit.ga</strong>';
                    header('Location: http://localhost/lasthit/login');
                }
            } else {
                $_SESSION['error'] = 'No se encontro el usuario ingresado';
                header('Location: http://localhost/lasthit/login');
            }
            break;
    }
} else {
    header('Location: http://localhost/lasthit/inicio');
}
