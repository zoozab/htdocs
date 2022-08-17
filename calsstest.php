<?php
class Animal{

  private $name;
  private $size;

  public function __construct($name,$size){
    $this->name = $name;
    $this->size = $size;
  }
  public function get_name(){
  return $this->name;
  }
  public function setName($name){
    $this->name = strtolower($name);
  }
  public function get_size(){
    return $this->size;
  }
}
class dog extends Animal{
  public function sound(){
    return 'dog has a sound';
  }
}

$dog = new dog("dog","small");
$shark = new Animal("shark","big");

echo $dog->get_name();
echo "<br>";
echo $shark->get_name();
echo "<br>";
echo "dog is :" .$dog->get_size();
echo "<br>";
echo "shark is :" . $shark->get_size();
echo "<br>";

var_dump($dog instanceof Animal);


 ?>
