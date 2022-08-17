<?php
$age =["peter"=>22,"jack"=>14,"sam"=>22];
//unset($age['sam']);
$str= json_encode($age);
$_session["save"]= $str;
echo json_encode($age);
 ?>
 <?php
echo "<br>";
$fruits = ["apple","orange","banana"];

 echo json_encode($fruits);
  ?>
<?php
echo "<br>";
var_dump(json_decode($_session["save"],true));
 ?>
<?php
echo "<br>";
$name ='{"sam":12 , "max":25 , "carol":22}';
 $obj = json_decode($name);
 echo $obj -> sam ."<br>";
 echo $obj -> max ."<br>" ;
 echo $obj -> carol ."<br>";
 ?>
 <?php
$asami ='{"sam":12 , "max":25 , "carol":22}';
$arrr = json_decode($asami,true);
echo $arrr["sam"] ."<br>";
echo $arrr["max"] . "<br>";
echo $arrr["carol"] ."<br>";
  ?>
  <?php
$names ='{"sam":12 , "max":25 , "carol":22}';
$objs = json_decode($names,true);
foreach ($objs as $key => $value) {
  echo $key . "=>" , $value . "<br>";
  
}


   ?>
