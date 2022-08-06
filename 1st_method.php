<?php

//1st Method

$url = 'https://www.google.co.in';
$scrape=file_get_contents($url);
echo $scrape;

?>