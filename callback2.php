<?php

$strings = [ "mamad","sasan","akbarina","hashem"];
$len = array_map(function($item) {return strlen($item);},$strings);
print_r($len);
 ?>
