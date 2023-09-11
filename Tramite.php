<?php
class Tramite {

    public $fecha, $nombre, $departamento;
    public function __construct()
    {
        // echo 'The class "', __CLASS__, '" was initiated!<br />';
    }

    // SETTERS

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }

    // GETTERS

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

}
