<?php
$d =mktime(11, 14, 54, 8, 12, 2014);

echo date("Y-m-d  h : i : s  a ",$d);

echo "<br>";

$d=strtotime("10:30 pm April 15 2014");
echo date("Y-m-d  h : i : s  a ",$d);


echo "<br>";

$d= strtotime("tomorrow");
date_default_timezone_set("Asia/Tehran");
echo date("Y-m-d  h : i : s  a ",$d);

echo "<br>" ;


$startdate = strtotime("saturday");
$enddate=strtotime("+6weeks",$startdate);

while ($startdate < $enddate){
    echo date("M d " , $startdate)."<br>";
    $startdate=strtotime("+1week" ,$startdate) ;
}

echo "<br>";


$d1 = strtotime("JUly 04");
$d2 = ceil(($d1-time())/60/60/24);
echo "there are " .$d2 ." days until the 04 of Agust.<br>";



echo "<br>";
