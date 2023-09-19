<?php

class Auto{

  private  $_color;
  private $_precio;
  private $_marca; 
  private $_fecha; 

  public function __construct($marca, $color, $precio = 1000, $fecha = null)
  {
    $this->_color = $color;
    $this->_marca = $marca;
    $this->_precio = $precio;
    $this->_fecha = null;
  }

    public function setColor($color) {
        $this->_color = $color;
    }

    public function setPrecio($precio) {
        $this->_precio = $precio;
    }

    public function setMarca($marca) {
        $this->_marca = $marca;
    }

    public function setFecha($fecha) {
        $this->_fecha = $fecha;
    }

  public function MostrarAuto()
    {

        return "Marca: " . $this->_marca . "<br />Color: " . $this->_color . "<br />Precio: $" . $this->_precio . "</br>";
    }

    public function AgregarImpuestos($impuesto)//validar si impuesto es doble (float)
    {
        $this->_precio += $impuesto;
    }

    

    public function equals($otroAuto)
    {

        if($this->_marca == $otroAuto->_marca)
        {
           // echo "- Ambos autos son " . $this->_marca . "</br>";
            return true;

        }else{
           /// echo "- Los colores de los 2 autos no coinciden. El primero es ". $this->_marca . " y el segundo es " . $otroAuto->_marca . "</br>";
            return false;

        }

    }

    public function equalsColor($otroAuto)
    {

        if($this->_color == $otroAuto->_color)
        {
           // return "- Ambos autos son " . $this->_color . "</br>";
            return true;

        }else{
           // echo "- Las marcas de los 2 autos no coinciden. El primero es ". $this->_color . " y el segundo es " . $otroAuto->_color . "</br>";
            return false;

        }

    }


    public function add($otroAuto)
    {
        if($this->equals($otroAuto) == true && $this->equalsColor($otroAuto) == true)
        {

            return (double)($this->_precio + $otroAuto->_precio);

        }else{
            return 0;
        }
    }

    public function obtenerListaAutosCsv($archivo)
    {
        
        $archivoCsv = fopen($archivo, "r");
        
        if ($archivoCsv !== false) 
        {
            $autos = array();
            // Recorre el archivo CSV línea por línea
            while (($fila = fgetcsv($archivoCsv)) !== false) {

                $auto = new Auto('', '');
                $auto->setMarca($fila[0]); 
                $auto->setColor($fila[1]); 
                $auto->setPrecio($fila[2]);
                // Agrega el objeto Auto al array de autos
                $autos[] = $auto;
            }
            
            // Cierra el archivo CSV
            fclose($archivoCsv);
            return $autos;


        }
     
    }

    public function AgregarAutoArchivoCsv($archivo)
    {
        if($this->buscarAutoExiste($archivo) == false){
        $archivoCsv = fopen($archivo, "a");
        $linea = $this->_marca . ',' . $this->_color . ',' . $this->_precio . ',' . $this->_fecha . "\n";

        fwrite($archivoCsv, $linea);
        fclose($archivoCsv);
        echo "El auto " . $this->_marca . " de color " . $this->_color . " se agregó correctamente<br>";

        }else{
            echo "El auto " . $this->_marca . " de color " . $this->_color . " no se pudo agregar </br>";
        }

    }

    public function buscarAutoExiste($archivo)
    {
        $listadoAutos = $this->obtenerListaAutosCsv($archivo);
        
        if (count($listadoAutos) > 0) 
        {
            foreach ($listadoAutos as $auto => $valor)
            {
                if ($this->equals($valor) == true)
                {
                    return true;
                }
            }
            // Si no se encontró ninguna coincidencia después de recorrer toda la lista
            return false;
        }
        else
        {
            return false;
        }
    }

}


?>