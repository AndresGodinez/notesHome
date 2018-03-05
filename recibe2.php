<?php
/**
 * Created by PhpStorm.

 */
//convertimos el xml en un objeto
function getXml($xmlData)
{
    return json_decode(json_encode(simplexml_load_string($xmlData)), true);
}
//var_dump($_POST);
//exit();
//obtenemos los datos post
if(isset($_POST['text'])){

$movie = getXml($_POST["text"]);
//aquí tenemos el nodo movie completo
//print_r($movie);
    return $movie;
}else{
    echo "Datos incorrectos";
}
