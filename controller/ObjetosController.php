<?php
if (isset($_POST['btnBuscarObjeto'])) {
    session_start();
    include_once('../repository/api/ObjetoApi.php');
    $objetoObjetoApi = new ObjetoApi();
    $accionSeleccionada = $_POST['btnBuscarObjeto'];
    switch ($accionSeleccionada) {
        case 'buscarObjeto':
            $objetos = $objetoObjetoApi->obtenerObjeto();
            $_SESSION['objetos'] = $objetos;
            header('Location: http://localhost/lasthit/objeto');
            break;
        case 'detallesObjeto':
            $objetoEspecifico = $objetoObjetoApi->obtenerDetallesObjeto($_POST['idObjeto']);
            $_SESSION['objetoEspecifico'] = $objetoEspecifico;
            $_SESSION['idObjeto'] = $_POST['idObjeto'];
            header('Location: http://localhost/lasthit/objeto/detalles/' . $_POST['idObjeto']);
            break;
    }
} else {
    header('Location: http://localhost/lasthit/inicio');
}
