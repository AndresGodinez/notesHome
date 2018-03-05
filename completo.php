<?php
/**
 * Created by PhpStorm.
 * User: aGodinez
 * Date: 04/03/18
 * Time: 03:57
 */
$input_xml = '<movies>
 <movie>
  <title>PHP: Behind the Parser</title>
  <characters>
   <character>
    <name>Ms. Coder</name>
    <actor>Onlivia Actora</actor>
   </character>
   <character>
    <name>Mr. Coder</name>
    <actor>El Actor</actor>
   </character>
  </characters>
  <plot>
   So, this language. It\'s like, a programming language. Or is it a
   scripting language? All is revealed in this thrilling horror spoof
   of a documentary.
  </plot>
  <great-lines>
   <line>PHP solves all my web problems</line>
  </great-lines>
  <rating type="thumbs">7</rating>
  <rating type="stars">5</rating>
 </movie>
</movies>';
if(!function_exists('curl_version'))
{
    echo "No tienes curl instalado"; die();
}
//url que recibirá la petición post
$url = "http://crudo.test/completo.php";

//iniciamos curl
$ch = curl_init();

//seteamos la url
curl_setopt($ch, CURLOPT_URL, $url);

//seteamos los datos post asociados a la variable xmlData
curl_setopt($ch, CURLOPT_POSTFIELDS, "xmlData=" . $input_xml);

//TRUE para devolver el resultado de la transferencia como string del valor de curl_exec().
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

//tiempo de espera, 0 infinito
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);

//ejecutamos la petición y asignamos el resultado a $data
$data = curl_exec($ch);

//cerramos la petición curl
curl_close($ch);

print_r($data);
//convertimos el xml en un objeto
function getXml($xmlData)
{
    return json_decode(json_encode(simplexml_load_string($xmlData)), true);
}

//obtenemos los datos post
$movie = getXml($_POST["xmlData"]);
//aquí tenemos el nodo movie completo
print_r($movie['movie']);