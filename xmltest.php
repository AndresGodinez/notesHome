<?php

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
//var_dump($input_xml);
if(!function_exists('curl_version'))
{
    echo "No tienes curl instalado"; die();
}else{
    echo "tienes curl instalado";
}