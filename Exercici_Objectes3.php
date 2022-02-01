<HTML>
<head>
<title>Currency Converter</title>
</head>
<body>

<?php
  class currency
{
  //PROPIETATS
  var $euros;
  var $pounds;
  var $exchange;

  //SETTERS
  public function seteuros($euros)
  {
    $this->euros=$euros;
  }

  public function setpounds($pounds)
  {
    $this->pounds=$pounds;
  }

  public function setexchange($exchange)
  {
    $this->exchange=$exchange;
  }

  //GETTERS
  public function geteuros()
  {
  return $this->euros;
  }
  public function getpounds()
  {
  return $this->pounds;
  }
  public function getexchange()
  {
  return $this->exchange;
  }

  //PRINTERS
  public function print()
  {
  echo "El euros es :". $this->geteuros();
  echo '<br>';
  echo "El pounds es:". $this->getpounds();
  echo '<br>';
  echo "El exchange es: ". $this->getexchange();
  echo '<br>';
  }

  function __construct($euros, $pounds, $exchange){
    $this->euros=$euros;
    $this->pounds=$pounds;
    $this->exchange=$exchange;
  }

}

  $currency1=new currency(1, 2, 3);
  $currency1->print();
  ?>
</body>
</HTML>
