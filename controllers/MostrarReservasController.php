<?php
require_once 'models/Reservacion.php';

class MostrarReservasController {
    public function mostrarReservas() {
        $reservas = Reservacion::obtenerReservas();
        require_once 'views/mostrar_reservas.php';
    }
}