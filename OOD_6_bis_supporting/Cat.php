<?php
class Cat extends LivingBeing {

  private $healthCondition;
  private $bestSense;

protected function get_healthCondition() {
    return $this->healthCondition;
  }

protected function sethealthCondition($healthCondition)
  {
    $this->healthCondition=$healthCondition;
}


protected function get_bestSense() {
  return $this->bestSense;
}

protected function setbestSense($bestSense)
{
  $this->bestSense=$bestSense;
}

public function __construct($healthCondition,$bestSense,$Age)
{
  $this->healthCondition=$healthCondition;
  $this->bestSense=$bestSense;
  parent::setAge($Age);
}

public function NextBirthday() {
  $this->Age= $this->Age * 2;
}

function oneYearOlder()
{
    if ($this->Age > 50)
          throw new Exception('Error: Age value too high');
      else
         Cat::NextBirthday();
         echo "I'm a cat, I'll be ".$this->Age." my next birthday"."<br><br>";
}

public function print () {
echo "I'm a cat in ".$this->get_healthCondition()." condition of health"."<br>";
echo "and my best sense is ".$this->get_bestSense()."my age is ";
echo parent::get_Age().'</br>';
}



}
 ?>
