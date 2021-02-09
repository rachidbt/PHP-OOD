<?php
include "person.php";

class Teacher extends Person
{
private $salary;

//SETTERS
public function setSalary($salary)
{
$this->salary=$salary;
}

//GETTERS
public function getsalary()
{
  return $this->salary;
}

public function __construct($name,$dni,$salary)
{
parent::__construct($name,$dni);
echo $this->salary=$salary;
}

public function print()
{
parent::print();
echo 'The salary of tecahers is ' .$this->salary.'<br><br>';
}
}
?>
