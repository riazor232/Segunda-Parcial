<?php
require_once 'models/Reservacion.php';

class ReservacionController {
    public function mostrarFormulario() {
        require_once 'views/formulario_reserva.php';
    }

    public function procesarReserva() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $reserva = new Reservacion(
                $_POST['hotel'],
                $_POST['nombre'],
                $_POST['apellido'],
                $_POST['telefono'],
                $_POST['fecha'],
                $_POST['observaciones']
            );

            if ($reserva->validar()) {
                $reserva->guardar();
                echo "Reserva guardada con éxito.";
            } else {
                echo "Error: Todos los campos son requeridos.";
            }
        }
        echo "<br><a href='index.php'>Volver</a>";
    }
}