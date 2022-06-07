<?php
if (isset($_POST['btnPerfil'])) {
    session_start();
    date_default_timezone_set('America/Santiago');
    include_once('../repository/sql/UsuarioSql.php');
    include_once('../repository/api/InvocadorApi.php');
    include_once('../repository/sql/RegionSql.php');
    include_once('../config/BDConfiguracion.php');
    include_once('../config/ApiConfiguracion.php');
    $objetoUsuarioSql = new UsuarioSql();
    $objetoInvocadorApi = new InvocadorApi();
    $objetoApi = new ApiConfiguracion();
    $objetoRegionSql = new RegionSql();
    $objetoConexion = new BDConfiguracion();
    $update = new DateTime();
    $conexion = $objetoConexion->obtenerConexion();
    $claveApi = $objetoApi->obtenerClaveApi();
    $accionSeleccionada = $_POST['btnPerfil'];
    switch ($accionSeleccionada) {
        case 'perfil':
            $regiones = $objetoRegionSql->obtenerRegiones($conexion);
            $_SESSION['regiones'] = $regiones;
            header('Location: http://localhost/lasthit/perfil');
            break;
        case 'cambiarClave':
            if (isset($_POST['clave']) && isset($_POST['nuevaClave'])) {
                if ($_POST['clave'] != '' && $_POST['nuevaClave'] != '') {
                    if ($_POST['clave'] != $_POST['nuevaClave']) {
                        if ($_POST['clave'] == $_SESSION['usuario']['clave']) {
                            $actualizarClave = $objetoUsuarioSql->actualizarClave($_SESSION['usuario']['idusuario'], $_POST['nuevaClave'], $update->format('Y-m-d H:i:s'), $conexion);
                            if ($actualizarClave == 1) {
                                $_SESSION['usuario']['clave'] = $_POST['nuevaClave'];
                                $_SESSION['exitoClave'] = 'Contraseña actualizada correctamente';
                                header('Location: http://localhost/lasthit/perfil');
                            } else {
                                $_SESSION['errorClave'] = 'No se pudo cambiar la contraseña';
                                header('Location: http://localhost/lasthit/perfil');
                            }
                        } else {
                            $_SESSION['errorClave'] = 'No se pudo cambiar la contraseña';
                            header('Location: http://localhost/lasthit/perfil');
                        }
                    } else {
                        $_SESSION['errorClave'] = 'La clave nueva no puede ser igual a la clave actual';
                        header('Location: http://localhost/lasthit/perfil');
                    }
                } else {
                    $_SESSION['errorClave'] = 'Debe completar todos los campos';
                    header('Location: http://localhost/lasthit/perfil');
                }
            } else {
                $_SESSION['errorClave'] = 'No se pudo cambiar la contraseña';
                header('Location: http://localhost/lasthit/perfil');
            }
            break;
        case 'cambiarNombreInvocador':
            if (isset($_POST['nombreInvocador']) && isset($_POST['nuevoNombreInvocador']) && isset($_POST['clave'])) {
                if ($_POST['nombreInvocador'] != '' && $_POST['nuevoNombreInvocador'] != '' && $_POST['clave'] != '') {
                    if ($_POST['clave'] == $_SESSION['usuario']['clave']) {
                        $invocador = $objetoInvocadorApi->obtenerInvocador($_SESSION['usuario']['plataforma'], str_replace(' ', '', $_POST['nuevoNombreInvocador']), $claveApi);
                        if (isset(json_decode($invocador)->{'status'}->{'status_code'})) {
                            $_SESSION['errorInvocador'] = 'No se encontro el invocador';
                            header('Location: http://localhost/lasthit/perfil');
                        } else {
                            $actualizarInvocador = $objetoUsuarioSql->actualizarInvocador($_SESSION['usuario']['idusuario'], $_POST['nuevoNombreInvocador'],  $update->format('Y-m-d H:i:s'), $conexion);
                            if ($actualizarInvocador == 1) {
                                $_SESSION['usuario']['nombreInvocador'] = $_POST['nuevoNombreInvocador'];
                                $_SESSION['exitoInvocador'] = 'Nombre de invocador actualizado correctamente';
                                header('Location: http://localhost/lasthit/perfil');
                            } else {
                                $_SESSION['errorInvocador'] = 'Error al actualizar el nombre de invocador';
                                header('Location: http://localhost/lasthit/perfil');
                            }
                        }
                    } else {
                        $_SESSION['errorInvocador'] = 'La clave no coincide';
                        header('Location: http://localhost/lasthit/perfil');
                    }
                } else {
                    $_SESSION['errorInvocador'] = 'Debe completar todos los campos';
                    header('Location: http://localhost/lasthit/perfil');
                }
            } else {
                $_SESSION['errorInvocador'] = 'No se pudo cambiar el nombre del invocador';
                header('Location: http://localhost/lasthit/perfil');
            }
            break;
        case 'cambiarRegion':
            if (isset($_POST['plataforma']) && isset($_POST['nuevaPlataforma']) && isset($_POST['clave'])) {
                if ($_POST['plataforma'] != '' && $_POST['nuevaPlataforma'] != '' && $_POST['clave'] != '') {
                    if ($_POST['clave'] == $_SESSION['usuario']['clave']) {
                        $invocador = $objetoInvocadorApi->obtenerInvocador($_POST['nuevaPlataforma'], str_replace(' ', '', $_SESSION['usuario']['nombreInvocador']), $claveApi);
                        if (isset(json_decode($invocador)->{'status'}->{'status_code'})) {
                            $_SESSION['errorRegion'] = 'No se encontro el invocador';
                            header('Location: http://localhost/lasthit/perfil');
                        } else {
                            $idRegion = $objetoRegionSql->buscarIdRegion($_POST['nuevaPlataforma'], $conexion);
                            $actualizarRegion = $objetoUsuarioSql->actualizarRegion($_SESSION['usuario']['idusuario'], $idRegion['idregion'], $update->format('Y-m-d H:i:s'), $conexion);
                            if ($actualizarRegion == 1) {
                                $_SESSION['usuario']['plataforma'] = $_POST['nuevaPlataforma'];
                                $_SESSION['exitoRegion'] = 'Region actualizada correctamente';
                                header('Location: http://localhost/lasthit/perfil');
                            } else {
                                $_SESSION['errorRegion'] = 'Error al actualizar la region';
                                header('Location: http://localhost/lasthit/perfil');
                            }
                        }
                    } else {
                        $_SESSION['errorRegion'] = 'La clave no coincide';
                        header('Location: http://localhost/lasthit/perfil');
                    }
                } else {
                    $_SESSION['errorRegion'] = 'Debe completar todos los campos';
                    header('Location: http://localhost/lasthit/perfil');
                }
            } else {
                $_SESSION['errorRegion'] = 'Error al actualizar la region';
                header('Location: http://localhost/lasthit/perfil');
            }
            break;
    }
} else {
    header('Location: http://localhost/lasthit/inicio');
}
