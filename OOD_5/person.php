<?php
class Person
{
public $name;
public $dni;


//SETTERS
 public function setname($name)
 {
   $this->name=$name;
 }
 public function setdni($dni)
 {
   $this->dni=$dni;
 }

//GETTERS
public function getname()
{
  return $this->name;
}
public function getdni()
{
  return $this->dni;
}

public function __construct($name,$dni)
{
$this->name=$name;
$this->dni=$dni;
}

public function print() //Si posam PROTECTED ens donara error ja que el OOD_5 es un arxiu extern
{
  echo $this->name.'<br>';
  echo $this->dni.'<br>';
}
}
?>
