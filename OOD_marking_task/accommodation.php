<?php

define ('MENJADOR', array('casa','a la carta','buffet','no'));

class accommodation {

  public $numhabit;
  private $menjador;

//SETTERS
protected function setnumhabit(){
  $this->numhabit=$numhabit;
}

protected function setmenjador(){
  $this->menjador=$menjador;
}

protected function setmenjador(){
  $this->menjador=$menjador;
}
//GETTERS
protected function getnumhabit(){
  return $this->numhabit;
}

protected function getmenjador(){
  return $this->menjador;
}

protected function getmenjador(){
  return $this->menjador;
}

public function __construct($numhabit,$menjador)
{
  $this->numhabit=$numhabit;
  $this->menjador=$menjador;
}

public function checkin(){
$this->numhabit=--$this->numhabit;
}

public function checkout(){
$this->numhabit=++$this->numhabit;
}

}
?>
