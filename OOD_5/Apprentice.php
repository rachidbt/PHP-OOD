<?php
include "student.php";
class Apprentice extends Student
{
private $FCTBusinessName;

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
parent::__construct();
$this->setFTCBusinessName.'<br>';
}
}
?>
