<?php
include "person.php";
class Student extends Person
{
private $studyField;

//GETTERS
public function getstudyfield()
{
  return $this->studyField;
}

//SETTERS
public function setStudyField($studyField)
{
  $this->studyField=$studyField;
}

public function print()//overriding print method from parent class Person
{
parent::print();//calling print method from parent class Person
echo $this->studyField.'<br>';
}
}

?>
