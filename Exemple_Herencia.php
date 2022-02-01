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

$professorASI=new Professor('Lola','12345678A');
$professorASI->salari(10);
$alumneASI=new Estudiant('Joana','98765432S');
$alumneASI->matricular('ASI');
$becariASI=new Becari('Anna','38475619T');
$becariASI->salari(8);

echo $professorASI->dades_persona();
echo $alumneASI->dades_persona();
echo $becariASI->dades_persona();
?>

</body>
</html>
