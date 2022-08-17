<?php
require_once 'Model.php';
class User extends Model{
    private $status;
    public function setStatus($status){
        $this->status = $status;
    }
  public function status(){
    return $this->status;
  }
}
