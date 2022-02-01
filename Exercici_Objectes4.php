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
  echo "<b>El euros es:</b> ". $this->geteuros();
  echo '<br>';
  echo "<b><ins>El exchange es:</ins></b> ". $this->getexchange();
  echo '<br>';
  echo "<b>El pounds es:</b> ". $this->getpounds();
  echo '<br>';
  }

  //construccio
  function __construct($pounds, $exchange){
    $this->pounds=$pounds;
    $this->exchange=$exchange;
  }

  //Functions conversio
  function convertpoundstoeuros (){
    $this->euros=$this->pounds*$this->exchange;
    return $this->euros;
  }


}//acaba la classe
  $pounds = 2;
  $exchange = 0;

  $currency1=new currency($pounds,$exchange);
  if ($exchange>0)
    $currency1->convertpoundstoeuros();
  else {
    echo "<h2>The exchange rate has to be greater than 0</h2><br>";
  }

  $currency1->print();
  ?>
</body>
</HTML>
