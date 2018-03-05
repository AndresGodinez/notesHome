<?php
/**
 * Created by PhpStorm.
 * User: aGodinez
 * Date: 03/03/18
 * Time: 22:54
 */
//url que recibirá la petición post
$url = "http://192.168.10.10/crudo/recibeXml.php";

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