<?php
require_once("casa.php");

final class Escuelas extends Casas{

    public $iCanchas;
    public $iLaboratorios;

    public function __construct(string $Arquitecto, 
    int $Metros, string $Ubicacion, int $Cocina, 
    int $Espacios, int $Canchas, int $Laboratorios)
    {
        parent::__construct($Arquitecto, $Metros, $Ubicacion, $Cocina, $Espacios);
    
        $this-> iCanchas = $Canchas;
        $this-> iLaboratorios = $Laboratorios;
    }

    public function getDatos()
    {
        $arrayConstruccion = array(
            'Arquitecto' => $this-> sArquitecto,
            'Metros' => $this-> iMetros,
            'Ubicacion' => $this-> sUbicacion,
            'Cocina' => $this-> iCocina,
            'Espacios' => $this-> iEspacios,
            'Canchas' => $this-> iCanchas,
            'Laboratorios' => $this-> iLaboratorios
        );
        return $arrayConstruccion;
    }
}
?>