<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ApiMapas</title>
</head>
<body>
<form action="">
    <input type="text" name="lugar">
    <button>Consultar</button>
</form>
</body>
</html>
<?php
if(isset($_GET['lugar'])){
    $lugar = $_GET['lugar'];
//    echo 'La dirección es '. $lugar;
    $ApiKey = 'AIzaSyBAjNXVPyYwbG76J9OeHbov8dz7AMZJaKw';
    $url= 'https://maps.googleapis.com/maps/api/geocode/json?address='.$lugar.'&key='. $ApiKey;
//    echo $url;
    $json = file_get_contents($url);
    $datos = json_decode($json,true);
    var_dump($datos['results'][0]['geometry']['bounds']);
}
