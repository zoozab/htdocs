<?php
$list = [
  [
    'name' => 'ali',
    'age' => 27
  ],
  [
    'name' => 'mohammad',
    'age' => 28
  ],
  [
    'name' => 'mohsen',
    'age' => 30
  ]
];

$total= 0 ;
//$names = [];

foreach ($list as $key => $item) {
  //$names[] = $item['name'];
  $arr[] = ['key' => $key, 'value' => $item];

}
?>
<pre>
<?php
print_r($arr);

?>
</pre>
