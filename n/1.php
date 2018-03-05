<?php
/**
 * Created by PhpStorm.
 * User: aGodinez
 * Date: 04/03/18
 * Time: 04:27
 */
$text = '<movies>
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
//echo "hello";
//exit();
$postData = ['text' => $text];

### Para este ejemplo la cadena $prexml tiene una cadena en formato xml
//Iniciamos una sesion cURL
$soap_do = curl_init();
//Indicamos a donde deseamos enviar nuestro post
curl_setopt($soap_do, CURLOPT_URL,"http://crudo.test/recibe2.php" );
//Indicamos lo que queremos enviar en nuestro post, en este caso un xml
curl_setopt($soap_do, CURLOPT_POSTFIELDS,$postData);
//Configuramos los headers necesarios. En este caso es importante la definición de la longitud de los datos a enviar
//curl_setopt($soap_do, CURLOPT_HTTPHEADER,array('Content-Type: application/x-www-form-urlencoded', 'Content-Length: '.strlen($prexml),'Host: http://crudo.test/recibe2.php' ));
//Ejecutamos el curl
//Añadimos una opción más para poder almacenar la respuesta en una variable
curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, 1);
//Ejecutamos el curl y almacenamos la respuesta en una variable
$respuesta=curl_exec($soap_do);
 var_dump($respuesta);
//Cerramos nuesta sesión
curl_close($soap_do);

