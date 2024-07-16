<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('BASE_PATH', __DIR__ . DIRECTORY_SEPARATOR);

require_once BASE_PATH . 'config/config.php';
require_once BASE_PATH . 'controllers/ReservacionController.php';
require_once BASE_PATH . 'controllers/MostrarReservasController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'mostrarFormulario';

switch ($action) {
    case 'mostrarFormulario':
        $controller = new ReservacionController();
        $controller->mostrarFormulario();
        break;
    case 'procesar':
        $controller = new ReservacionController();
        $controller->procesarReserva();
        break;
    case 'mostrar':
        $controller = new MostrarReservasController();
        $controller->mostrarReservas();
        break;
    default:
        echo "Acción no válida";
        break;
}