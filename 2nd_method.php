<?php

//2nd method

$url = 'https://www.google.co.in';
$scr=file($url);
$scrape = implode('',$scr);
echo $scrape;


?>