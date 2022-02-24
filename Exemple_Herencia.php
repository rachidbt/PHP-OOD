<html>
<head>
<title>Exemple amb Herència</title>
</head>
<body>

<?php

class Persona
{
private $nom;
private $dni;

public function __construct($nom,$dni)
{
$this->nom=$nom;
$this->dni=$dni;
}

public function dades_persona()
{
echo $this->nom.'<br>';
echo $this->dni.'<br><br>';
}
}//END CLASS PERSONA

class Professor extends Persona
{
private $sou;
public function salari($sou)
{
$this->sou=$sou;
}
}//END CLASS PROFESSOR

class Estudiant extends Persona
{
private $cicle;

public function matricular($cicle)
{
$this->cicle=$cicle;
}

public function dades_persona()
{
parent::dades_persona();
echo $this->cicle.'<br>';
}
}//END CLASS ESTUDIANT

class Becari extends Estudiant
{
private $sou;

public function salari($sou)
{
$this->sou=$sou;
}

}//END CLASS BECARI

$professorASIX=new Professor('Lola','12345678A');
$professorASIX->salari(10);
$alumneASIX=new Estudiant('Joana','98765432S');
$alumneASIX->matricular('ASIX');
$becariASIX=new Becari('Anna','38475619T');
$becariASIX->salari(8);

echo $professorASIX->dades_persona();
echo $alumneASIX->dades_persona();
echo $becariASIX->dades_persona();
?>

</body>
</html>
