<?php
class Reservacion {
    private $hotel;
    private $nombre;
    private $apellido;
    private $telefono;
    private $fecha;
    private $observaciones;

    public function __construct($hotel, $nombre, $apellido, $telefono, $fecha, $observaciones) {
        $this->hotel = $hotel;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->fecha = $fecha;
        $this->observaciones = $observaciones;
    }

    public function validar() {
        if (empty($this->hotel) || empty($this->nombre) || empty($this->apellido) || 
            empty($this->telefono) || empty($this->fecha)) {
            return false;
        }
        return true;
    }

    public function guardar() {
        $datos = implode("|", [
            $this->hotel,
            $this->nombre,
            $this->apellido,
            $this->telefono,
            $this->fecha,
            $this->observaciones
        ]);
        file_put_contents(RUTA_ARCHIVO, $datos . PHP_EOL, FILE_APPEND);
    }

    public static function obtenerReservas() {
        $reservas = file(RUTA_ARCHIVO, FILE_IGNORE_NEW_LINES);
        return array_map(function($linea) {
            return explode("|", $linea);
        }, $reservas);
    }
}