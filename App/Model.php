<?php

class Model{
  protected $name;
  protected $address;
  protected $phone;
  protected $sells = [];
  public function sell(int $amount = 0, string $remark = ''){
    $this->sells[] = [
      'id'=> uniqid(),
      'amount' => $amount,
      'remark' => $remark
    ];
  }
  public function getSells(){
    return $this->sells;
  }
}

