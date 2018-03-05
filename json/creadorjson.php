<?php
/**
 * Created by PhpStorm.
 * User: aGodinez
 * Date: 04/03/18
 * Time: 18:42
 */
class CrearJsonPersona{
    protected $nombre;
    protected $edad;

    public function setNombre($nobre)
    {
        $this->nombre = $nobre;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    public function jsonPeople(){
        $array = array(
            "empleados" => array(
                array("nombre" => $this->nombre, "edad" => $this->edad)
            )
        );
        return json_encode($array);
    }
}