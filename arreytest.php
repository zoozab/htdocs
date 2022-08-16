<?php
$arr = [
  [
    "name"=>"ali",
    "age"=>22
  ],
  [
  "name"=>"sanaz",
  "age"=>33
  ] ,
  [
    "name"=>"mamad",
    "age"=>12
  ] ,
  [
    "name"=>"morad",
    "age"=>20
  ]
];
//$nextar=0;
foreach($arr as $key => $item ){
  $nextar[]=["key"=>$key , "value"=>$item];
}
?>
<pre>
<?php
print_r($nextar);

 ?>
<pre>
