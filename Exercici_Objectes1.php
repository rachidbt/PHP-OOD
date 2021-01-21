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
public function setanomenar($nom)
{
$this->nom=$nom;
}

public function setdades($dni)
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
public function getanomenar()
{
return $this->nom;
}

public function getdades()
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




public function imprimir()
{
echo "El nom es : $this->nom";
echo '<br>';
echo "El DNI es: $this->dni";
echo '<br>';
echo "El primer cognom es: ". $this->getsurname1();
echo '<br>';
echo "El segon cognom es: ". $this->getsurname2();
echo '<br>';
echo "La edat es: $this->age";
echo '<br>';
}

}//ACABA LA CLASS

$alumne1=new Alumne();
$alumne1->setanomenar('Bianca');
$alumne1->setdades('23344556D');
$alumne1->setsurname1('Carla');
$alumne1->setsurname2('Botos');
$alumne1->setage(21);
$alumne1->imprimir();

echo '<br>';

$alumne2=new Alumne();
$alumne2->setanomenar('Rachid');
$alumne2->setdades('65544332E');
$alumne2->setsurname1('Bittich');
$alumne2->setsurname2('Khoulati');
$alumne2->setage(24);
$alumne2->imprimir();
?>
</body>
</HTML>
