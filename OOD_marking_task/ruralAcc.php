<?php
define ('TIPUS_ACTIVITATS', array('senderisme','equitacio','ciclisme'));

class ruralacc  extends accommodation {
  private $orgactivitats;
  private $instairelliure;

  const INST_AIRE_LLIURE = array('jardi','muntanya','platja');

//SETTERS
protected function setorgactivitats(){
  $this->orgactivitats=$orgactivitats;
}
protected function setinstairelliure(){
  $this->instairelliure=$instairelliure;
}
protected function settipus_activitats(){
  $this->tipus_activitats=$tipus_activitats;
}

//GETTERS
protected function getorgactivitats(){
  return $this->orgactivitats;
}
protected function getinstairelliure(){
  return $this->instairelliure;
}
protected function gettipus_activitats(){
  return $this->tipus_activitats;
}

public function __construct($orgactivitats,$instairelliure,$numhabit,$menjador)
{
  $this->orgactivitats=$orgactivitats;
  $this->instairelliure=$instairelliure;
  parent::setnumhabit($numhabit);
  parent::setmenjador($menjador);
}


}
?>
