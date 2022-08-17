<?php

class Shape{
  public $width;
  public $height;

  public function __construct($width, $height){
    $this->width = $width;
    $this->height = $height;
  }
  public function area(){
    return $this->width * $this->height;
  }
  public function setWidth($width){
    $this->width = $width;
  }
}
class Rectangle extends Shape{

  public function width(){
    parent::setWidth(45);
  }
  public function getWidth(){
    return $this->width;
  }
}
$rect = new Rectangle(90,120);
$sh = new Shape(20,60);
echo $sh->area() . '</br>';
$rect->width();
echo $rect->getWidth();
