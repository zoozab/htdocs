<?php

function callback_my($item){
  return strlen($item);
}
$strings = ["jack","bank","tree","hello world"];
$lengths = array_map("callback_my",$strings);
print_r($lengths);
 ?>
