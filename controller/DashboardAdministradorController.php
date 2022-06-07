<?php
if (isset($_POST['btnDashboard'])) {
    session_start();
    $accionSeleccionada = $_POST['btnDashboard'];
    switch ($accionSeleccionada) {
        case 'dashboard':
            header('Location: http://localhost/lasthit/dashboard/administrador/');
            break;
    }
} else {
    header('Location: http://localhost/lasthit/inicio');
}
