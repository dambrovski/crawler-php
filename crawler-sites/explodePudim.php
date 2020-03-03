<?php

$url = "http://www.pudim.com.br/";


$dadosSite = file_get_contents($url);

$var1 = explode('<title>', $dadosSite);

$var2 = explode("</title>",$var1[1]);

echo($var2[0])

?>