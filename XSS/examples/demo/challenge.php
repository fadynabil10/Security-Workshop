<?php

$payload = strip_tags($_GET['xss'],'<a><img><b><i>');
$xss = preg_replace('/(on)/i', '', $payload);
$xss2 = preg_replace('/(javascript)/i', '', $xss);
echo '<h1> XSS Challenge </h1>';
echo 'Try to execute: alert(1) on this page<br> Allowed tags: '.htmlspecialchars('<a><img> , <b> , <i>');
echo 'Your Payload is : '. htmlspecialchars($_GET['xss']);
echo '<br><br> 
                 '. $xss2;


?>