<?php

//3rd method
//to scrape the content from body tag
//warnings may occur

function getbody($filename) {
     $file = file_get_contents($filename);   
     libxml_use_internal_errors(true);    
     $dom = new DOMDocument();
     $dom->loadHTML($file);
     $bodies = $dom->getElementsByTagName('body');
     assert($bodies->length === 1);
     $body = $bodies->item(0);
     for ($i = 0; $i < $body->children->length; $i++) {
         $body->remove($body->children->item($i));
     }
     $stringbody = $dom->saveHTML($body);
     return $stringbody;
 }

 $url = "https://www.example.com";
 $bodycontent = getbody($url);

echo $bodycontent;


?>