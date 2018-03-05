<?php
/**
 * Created by PhpStorm.
 * User: aGodinez
 * Date: 04/03/18
 * Time: 18:49
 */
include_once('creadorjson.php');
$personas = [
    ['nombre' => 'Jan', 'edad' => '25'],
    ['nombre' => 'Emily', 'edad' => 10],
    ['nombre' => 'Ximena', 'edad' => 21]
];
$personas;
foreach ($personas as $persona) {
    $objetoPersona = new CrearJsonPersona();
    $objetoPersona -> setNombre($persona['nombre']);
    $objetoPersona -> setEdad($persona['edad']);
    $jsonvar = $objetoPersona -> jsonPeople();
    print_r($jsonvar);
}
//print_r($personas);