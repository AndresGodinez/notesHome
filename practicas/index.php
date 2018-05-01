<?php 
require 'Render.php';

$render = new Render();

echo  $render -> words(['Programación', 'Orientada', 'a', 'Objetos'])
			  -> separador('-')
			  -> get();
