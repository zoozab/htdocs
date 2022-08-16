<?php
declare (strict_types=1);
echo "Welcome TO Training : <br>";
echo "<br>";


function writmsg(){
  echo "hello world......<br>";
}
writmsg();

echo "<br>";



function familyname($fname,$year){
  echo "$fname akbari , born in $year <br>";
}
familyname("reza","1995");
familyname("ahmad","1932");
familyname("saiid","1996");

echo "<br>";

function addnums(int $a , int $b){
  $z = $a + $b ;
  return $z ;
}
echo "3+4  = " .addnums(3,"4") ."<br>";
