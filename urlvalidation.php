<?php

$url = "https://www.w3schools.com";

if(filter_var($url , FILTER_VALIDATE_URL , FILTER_FLAG_QUERY_REQUIRED === false)){
  echo ("$url is a valid URL with a query string");
}
else {
  echo ("$url is  NOt  a valid URL with a query string");
}

 ?>
