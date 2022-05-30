<?php
if (isset($_POST['btnBuscarPersonaje'])) {
    session_start();
    include_once('../repository/api/PersonajeApi.php');
    $objetoPersonajeApi = new PersonajeApi();
    $accionSeleccionada = $_POST['btnBuscarPersonaje'];
    switch ($accionSeleccionada) {
        case 'buscarPersonaje':
            $personajes = $objetoPersonajeApi->obtenerPersonajes();
            $_SESSION['personajes'] = $personajes;
            header('Location: http://localhost/lasthit/campeon');
            break;
        case 'detallesCampeon':
            $detallesPersonaje = $objetoPersonajeApi->obtenerDetallesPersonaje($_POST['idPersonaje']);
            $_SESSION['personajeEspecifico'] = $detallesPersonaje;
            $_SESSION['idPersonaje'] = $_POST['idPersonaje'];
            header('Location: http://localhost/lasthit/campeon/detalles/' . $_POST['idPersonaje']);
            break;
    }
} else {
    header('Location: http://localhost/lasthit/campeon');
}
