<?php
require_once("construcciones.php");
class Casas extends Construc{

    public $iCocina;
    public $iEspacios;

    public function __construct(string $Arquitecto, 
    int $Metros, string $Ubicacion, int $Cocina, 
    int $Espacios)
    {
        parent::__construct($Arquitecto, $Metros, $Ubicacion);

        $this-> iCocina = $Cocina;
        $this-> iEspacios = $Espacios;
    }

    public function getDatos()
    {
        $arrayConstruccion = array(
            'Arquitecto' => $this-> sArquitecto,
            'Metros' => $this-> iMetros,
            'Ubicacion' => $this-> sUbicacion,
            'Cocina' => $this-> iCocina,
            'Espacios' => $this-> iEspacios
            );
        return $arrayConstruccion;
    }
}
?>