<HTML>
<head>
<title>Primer exemple amb POO</title>
</head>
<body>

<?php
class Alumne
{
  //PROPIETATS
var $nom;
var $dni;
var $surname1;
var $surname2;
var $age;

//SETTERS
public function setnom($nom)
{
$this->nom=$nom;
}

public function setdni($dni)
{
$this->dni=$dni;
}

public function setsurname1($surname1)
{
$this->surname1=$surname1;
}

public function setsurname2($surname2)
{
$this->surname2=$surname2;
}

public function setage($age)
{
$this->age=$age;
}

//GETTERS
public function getnom()
{
return $this->nom;
}

public function getdni()
{
return $this->dni;
}
public function getsurname1()
{
return $this->surname1;
}

public function getsurname2()
{
return $this->surname2;
}

public function getage()
{
return $this->age;
}

function __construct($nom, $dni, $surname1, $surname2, $age) {
  $this->nom=$nom;
  $this->dni=$dni;
  $this->surname1=$surname1;
  $this->surname2=$surname2;
  $this->age=$age;
}

}//ACABA LA CLASS

$alumne=new Alumne('Bianca','23344556D','Carla','Botos','21');
echo "El nom es : ". $alumne->getnom();
echo '<br>';
echo "El DNI es: ". $alumne->getdni();
echo '<br>';
echo "El primer cognom es: ". $alumne->getsurname1();
echo '<br>';
echo "El segon cognom es: ". $alumne->getsurname2();
echo '<br>';
echo "La edat es: ". $alumne->getage();
echo '<br>';
?>
</body>
</HTML>
