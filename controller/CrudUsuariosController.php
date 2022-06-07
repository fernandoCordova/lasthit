<?php
if (isset($_POST['btnCrudUsuarios'])) {
    session_start();
    date_default_timezone_set('America/Santiago');
    include_once('../model/Usuario.php');
    include_once('../repository/sql/UsuarioSql.php');
    include_once('../repository/sql/TipoUsuarioSql.php');
    include_once('../repository/sql/EstadoSql.php');
    include_once('../repository/sql/RegionSql.php');
    include_once('../repository/api/InvocadorApi.php');
    include_once('../config/BDConfiguracion.php');
    include_once('../config/ApiConfiguracion.php');
    $objetoUsuarioSql = new UsuarioSql();
    $objetoTipoUsuarioSql = new TipoUsuarioSql();
    $objetoEstadoSql = new EstadoSql();
    $objetoRegionSql = new RegionSql();
    $objetoInvocadorApi = new InvocadorApi();
    $objetoConexion = new BDConfiguracion();
    $objetoApi = new ApiConfiguracion();
    $update = new DateTime();
    $conexion = $objetoConexion->obtenerConexion();
    $claveApi = $objetoApi->obtenerClaveApi();
    $accionSeleccionada = $_POST['btnCrudUsuarios'];
    switch ($accionSeleccionada) {
        case 'crudUsuarios':
            $usuarios = $objetoUsuarioSql->obtenerListadoUsuarios($conexion);
            $estados = $objetoEstadoSql->obtenerEstados($conexion);
            $tiposUsuarios = $objetoTipoUsuarioSql->obtenerTiposDeUsuarios($conexion);
            $regiones = $objetoRegionSql->obtenerRegiones($conexion);
            $_SESSION['regiones'] = $regiones;
            $_SESSION['usuarios'] = $usuarios;
            $_SESSION['estados'] = $estados;
            $_SESSION['tiposUsuarios'] = $tiposUsuarios;
            header('Location: http://localhost/lasthit/dashboard/administrador/crud/usuario');
            break;
        case 'editarUsuario':
            if (isset($_POST['correo']) && isset($_POST['nombreInvocador']) && isset($_POST['region']) && isset($_POST['clave']) && isset($_POST['estado']) && isset($_POST['tipoUsuario']) && isset($_POST['idusuario'])) {
                if ($_POST['correo'] == '' || $_POST['nombreInvocador'] == '' || $_POST['region'] == '' || $_POST['clave'] == '' || $_POST['estado'] == '' || $_POST['tipoUsuario'] == '' || $_POST['idusuario'] == '') {
                    $_SESSION['error'] = 'Debe completar todos los campos';
                    header('Location: http://localhost/lasthit/dashboard/administrador/crud/usuario');
                } else {
                    $invocador = $objetoInvocadorApi->obtenerInvocador($_POST['region'], str_replace(' ', '', $_POST['nombreInvocador']), $claveApi);
                    if (isset(json_decode($invocador)->{'status'}->{'status_code'})) {
                        $_SESSION['error'] = 'No se encontro el invocador';
                        header('Location: http://localhost/lasthit/dashboard/administrador/crud/usuario');
                    } else {
                        $idRegion = $objetoRegionSql->buscarIdRegion($_POST['region'], $conexion);
                        $fechaActualizacion = $update->format('Y-m-d H:i:s');
                        $usuario = new Usuario($_POST['correo'], $_POST['clave'], $_POST['nombreInvocador'], null, $fechaActualizacion, null, $_POST['tipoUsuario'], $_POST['estado'], $idRegion['idregion']);
                        $modificarUsuario = $objetoUsuarioSql->modificarUsuario($usuario, $_POST['idusuario'], $conexion);
                        if ($modificarUsuario == 1) {
                            $_SESSION['exito'] = 'Usuario modificado correctamente';
                            $usuarios = $objetoUsuarioSql->obtenerListadoUsuarios($conexion);
                            $estados = $objetoEstadoSql->obtenerEstados($conexion);
                            $tiposUsuarios = $objetoTipoUsuarioSql->obtenerTiposDeUsuarios($conexion);
                            $regiones = $objetoRegionSql->obtenerRegiones($conexion);
                            $_SESSION['regiones'] = $regiones;
                            $_SESSION['usuarios'] = $usuarios;
                            $_SESSION['estados'] = $estados;
                            $_SESSION['tiposUsuarios'] = $tiposUsuarios;
                            if ($_SESSION['usuario']['idusuario'] == $_POST['idusuario']) {
                                $usuario = $objetoUsuarioSql->obtenerUsuario($_POST['idusuario'], $conexion);
                                $_SESSION['usuario'] = $usuario;
                            }
                            header('Location: http://localhost/lasthit/dashboard/administrador/crud/usuario');
                        } else {
                            $_SESSION['error'] = 'Error al modificar el usuario';
                            header('Location: http://localhost/lasthit/dashboard/administrador/crud/usuario');
                        }
                    }
                }
            } else {
                $_SESSION['error'] = 'Error al modificar usuario';
                header('Location: http://localhost/lasthit/dashboard/administrador/crud/usuario');
            }
            break;
    }
} else {
    header('Location: http://localhost/lasthit/dashboard/administrador/');
}
