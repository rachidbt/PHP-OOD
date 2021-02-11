<?php

define ('SPEAKING_CAPABILITY', array('guau','miau','laguage'));
define ('EATING_CAPABILITY', array('meat','vegs','meat and vegs'));
define ('MOVING_CAPABILITY', array('walk','fly'));
define ('HEATH_CONDITION', array('excellent', 'good', 'in need of treatment'));

error_reporting(E_ERROR | E_PARSE);

class  LivingBeing  {
  const GENDER = array('female','male');
  const STATUS = array('sleeping','aweka');
  const BEST_SENSE = array('eyesight', 'smell', 'hearing', 'touch');

//propietats
  public $Age;
  private $Status;
  private $Gender;
  private $Eating_Capability;
  private $Moving_Capability;
  private $Speaking_Capability;

  function get_Age() {
    return $this->Age;
  }

  function setAge($Age)
  {
    $this->Age=$Age;
}
  function get_Status() {
    return $this->Status;
  }

  function setStatus($Status)
  {
    $this->Status=$Status;
  }

  function get_Gender() {
    return $this->Gender;
  }

  function setGender($Gender)
  {
    $this->Gender=$Gender;
  }

  function get_Eating_Capability() {
    return $this->Eating_Capability;
  }

  function setEating_Capability($Eating_Capability)
  {
    $this->Eating_Capability=$Eating_Capability;
  }

  function get_Moving_Capability() {
    return $this->Moving_Capability;
  }

  function setMoving_Capability($Moving_Capability)
  {
    $this->Moving_Capability=$Moving_Capability;
  }

  function get_Speaking_Capability() {
    return $this->Speaking_Capability;
  }

  function setSpeaking_Capability($Speaking_Capability)
  {
    $this->Speaking_Capability=$Speaking_Capability;
  }

function oneYearOlder()
{
$this->Age=++$this->Age;
}

}
//getters & setters

//

 ?>
