<?php
class businessacc  extends accommodation {
  private $sales;

  const SELES= array('reunions','audio visuals','internet','no');

//SETTERS
protected function setsales(){
  $this->sales=$sales;
}
protected function setseles(){
  $this->seles=$seles;
}

//GETTERS
protected function getsales(){
  return $this->sales;
}
protected function getseles(){
  return $this->seles;
}

public function checkin(){
{
    if ($numhabit == 0)
        throw new Exception('Check-in Error: Hotel complet. Operació no permesa');
    else
        return ($this->numhabit=--$this->numhabit);
      }
}
}
?>
