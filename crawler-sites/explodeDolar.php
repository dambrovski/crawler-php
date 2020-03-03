<?php

require '..\simplehtmldom\simple_html_dom.php';

$html = file_get_html('https://trends24.in/brazil/');
//ECHO $html;
$title = $html->find('title', 0);
$image = $html->find('img', 0);

echo $title->plaintext."<br>\n";
//echo $image->src;
ECHO "ss";
?>