<?php
class person extends LivingBeing{
  private $fullname;

//SETTERS
protected function setfullname($fullname)
{
$this->fullname=$fullname;
}

//GETTERS
protected function getfullname()
{
  return $this->fullname;
}

public function __construct($fullname)
{
  $this->fullname=$fullname;

  parent::setage(21);
  parent::setgender(parent::GENDER[1]);
  parent::setstatus(parent::STATUS[0]);
  parent::setspeakingCapability(SPEAKINGCAPABILITY[1]);
  parent::seteatingCapability(EATINGCAPABILITY[0]);
  parent::setmovingCapability(MOVINGCAPABILITY[0]);
}

public function print()
{
echo "I'm ". $this->getfullname();
echo '<br>';
echo "I have ". $this->getage()." and";
echo '<br>';
echo "I can talk a ". $this->getspeakingCapability();
echo '<br>';
echo "eat ". $this->geteatingCapability();
echo '<br>';
echo "and ". $this->getmovingCapability();
echo '<br>';
echo "My status is ". $this->getstatus();
echo '<br>';
echo "My gender is ". $this->getgender();
echo '<br>';
}
}
?>
