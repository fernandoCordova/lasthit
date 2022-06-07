<?php
//Validar existencia del btnRegistro
if (isset($_POST['btnRegistro'])) {
    //iniciar la sesion y definir zona horaria
    session_start();
    date_default_timezone_set('America/Santiago');
    //Importar las clases necesarias
    include_once('../model/Usuario.php');
    include_once('../repository/sql/UsuarioSql.php');
    include_once('../repository/api/invocadorApi.php');
    include_once('../repository/sql/RegionSql.php');
    include_once('../config/BDConfiguracion.php');
    include_once('../config/ApiConfiguracion.php');
    //Crear instancias de las clases
    $objetoUsuarioSql = new UsuarioSql();
    $objetoInvocadorApi = new InvocadorApi();
    $objetoConexion = new BDConfiguracion();
    $objetoRegionSql = new RegionSql();
    $objetoApi = new ApiConfiguracion();
    $create = new DateTime();
    //Obtener la accion seleccionada
    $accionSeleccionada = $_POST['btnRegistro'];
    $conexion = $objetoConexion->obtenerConexion();
    $claveApi = $objetoApi->obtenerClaveApi();
    //Switch para validar la accion seleccionada
    switch ($accionSeleccionada) {
        case 'registro':
            $_SESSION['regiones'] = $objetoRegionSql->obtenerRegiones($conexion);
            header('Location: http://localhost/lasthit/registro');
            break;
        case 'registrarse':
            if (isset($_POST['correo']) && isset($_POST['nombreInvocador']) && isset($_POST['region']) && isset($_POST['clave']) && isset($_POST['confirmacionClave'])) {
                if ($_POST['correo'] == '' || $_POST['nombreInvocador'] == '' || $_POST['region'] == '' || $_POST['clave'] == '' || $_POST['confirmacionClave'] == '') {
                    $_SESSION['error'] = 'Debe completar todos los campos';
                    header('Location: http://localhost/lasthit/registro');
                } else {
                    if ($_POST['clave'] != $_POST['confirmacionClave']) {
                        $_SESSION['error'] = 'Las claves no coinciden';
                        header('Location: http://localhost/lasthit/registro');
                    } else {
                        $invocador = $objetoInvocadorApi->obtenerInvocador($_POST['region'], str_replace(' ', '', $_POST['nombreInvocador']), $claveApi);
                        if (isset(json_decode($invocador)->{'status'}->{'status_code'})) {
                            $_SESSION['error'] = 'No se encontro el invocador';
                            header('Location: http://localhost/lasthit/registro');
                        } else {
                            $validarUsuario = $objetoUsuarioSql->validarUsuario($_POST['correo'], $_POST['clave'], $conexion);
                            if ($validarUsuario['cantidadUsuarios'] > 0) {
                                $_SESSION['error'] = 'El usuario ya existe';
                                header('Location: http://localhost/lasthit/registro');
                            } else {
                                $idRegion = $objetoRegionSql->buscarIdRegion($_POST['region'], $conexion);
                                $fechaCreacion = $create->format('Y-m-d H:i:s');
                                $usuario = new Usuario($_POST['correo'], $_POST['clave'], $_POST['nombreInvocador'], $fechaCreacion, null, null, 2, 1, $idRegion['idregion']);
                                $insertarUsuario = $objetoUsuarioSql->insertarUsuario($usuario, $conexion);
                                if ($insertarUsuario == 1) {
                                    $_SESSION['exito'] = 'Usuario registrado correctamente';
                                    header('Location: http://localhost/lasthit/login');
                                } else {
                                    $_SESSION['error'] = 'Error al registrar el usuario';
                                    header('Location: http://localhost/lasthit/registro');
                                }
                            }
                        }
                    }
                }
            } else {
                $_SESSION['error'] = 'Error al registrar usuario';
                header('Location: http://localhost/lasthit/registro');
            }
            break;
    }
} else {
    header('Location: http://localhost/lasthit/inicio');
}
