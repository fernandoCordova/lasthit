<?php
if (isset($_POST['btnPerfil'])) {
    session_start();
    $accionSeleccionada = $_POST['btnPerfil'];
    switch ($accionSeleccionada) {
        case 'perfil':
            header('Location: http://localhost/lasthit/perfil');
            break;
    }
} else {
    header('Location: http://localhost/lasthit/inicio');
}
