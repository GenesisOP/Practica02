<?php 

class Construc{
    public $sArquitecto;
    public $iMetros;
    public $sUbicacion;
    

    public function __construct(string $Arquitecto, int $Metros, string $Ubicacion)
    {
        $this-> sArquitecto = $Arquitecto;
        $this-> iMetros = $Metros;
        $this-> sUbicacion = $Ubicacion;
    }

    public function getDatos(){
        $arrayConstruccion = array(
            'Arquitecto' => $this-> sArquitecto,
            'Metros' => $this-> iMetros,
            'Ubicacion' => $this-> sUbicacion
        );
        return $arrayConstruccion;
    }
}
?>