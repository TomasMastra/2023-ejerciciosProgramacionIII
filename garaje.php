<?php


class garage{

   //Atributos

   private $_razonSocial;
   private $_precioPorHora;
   private $_autos;
   

    //constructor

    public function __construct($razonSoaial, $precioPorHora = '')
    {
        $this->_razonSocial = $razonSoaial;
        $this->_precioPorHora = $precioPorHora;
        $this->_autos = array();
    }

    public function MostrarGarage()
    {
        return "Razon Social: " . $this->_razonSocial . " " . "Precio Por Hora: " . $this->$_precioPorHora;
    }

    private function Equals($auto)
    {
        foreach($this->_autos as $autoGarage => $celda)
        {
            if($auto == $celda)
            {
                return TRUE;
            }
        }
        return FALSE;
    }

    public function Add($auto)
    {
        if(!$this->Equals($auto)){

            array_push($this->_autos, $auto);
            return "Se agrego el auto correctamente </br>";
        }
        return "No se agrego el auto, ya esta dentro </br>";
    }

    public function MostrarAutos()
    {
        foreach($this->_autos as $autoGarage => $celda)
        {
            echo $celda->MostrarAuto() . "</br> ----------------------------------- </br>";

        }
    }

}

?>