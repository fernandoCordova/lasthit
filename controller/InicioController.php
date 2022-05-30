<?php
if (isset($_POST['btnInicio'])) {
    session_start();
    $accionSeleccionada = $_POST['btnInicio'];
    switch ($accionSeleccionada) {
        case 'inicio':
            header('Location: http://localhost/lasthit/inicio');
            break;
    }
} else {
    header('Location: http://localhost/lasthit/inicio');
}
