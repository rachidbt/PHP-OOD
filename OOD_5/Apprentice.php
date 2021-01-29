<?php
class Apprentice extends Student
{
public $FCTBusinessName;

//GETTERS
public function getFTCBusinessName()
{
  return $this->FTCBusinessName;
}

//SETTERS
public function setFTCBusinessName($FTCBusinessName)
{
  $this->FTCBusinessName=$FTCBusinessName;
}

public function print()
{
parent::print();
echo $this->FTCBusinessName.'<br>';
}

public function __construct()
{
parent::construct();
$this->setFTCBusinessName.'<br>';
}
}
?>
