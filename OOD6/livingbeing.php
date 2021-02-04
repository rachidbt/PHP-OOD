<?php
define (SPEAKINGCAPABILITY, array('miau','guau','language'));
define (EATINGCAPABILITY, array('meat','vegs','meat and vegs'));
define (MOVINGCAPABILITY, array('walk','fly'));

class LivingBeing{
  public $age;
  private $status;
  private $gender;
  private $eatingCapability;
  private $movingCapability;
  private $speakingCapability;


const GENDER=array('female','male');
const STATUS=array('awake','sleeping');

//SETTERS
protected function setage($age)
{
$this->age=$age;
}
protected function setstatus($status)
{
$this->status=$status;
}
protected function setgender($gender)
{
$this->gender=$gender;
}
protected function seteatingCapability($eatingCapability)
{
$this->eatingCapability=$eatingCapability;
}
protected function setmovingCapability($movingCapability)
{
$this->movingCapability=$movingCapability;
}
protected function setspeakingCapability($speakingCapability)
{
$this->speakingCapability=$speakingCapability;
}

//GETTERS
protected function getage()
{
  return $this->age;
}
protected function getstatus()
{
  return $this->status;
}
protected function getgender()
{
  return $this->gender;
}
protected function geteatingCapability()
{
  return $this->eatingCapability;
}
protected function getmovingCapability()
{
  return $this->movingCapability;
}
protected function getspeakingCapability()
{
  return $this->speakingCapability;
}

public function oneyearolder(){
  $this->age=++$this->age;
}
}

?>
