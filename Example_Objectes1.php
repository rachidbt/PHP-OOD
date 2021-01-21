<HTML>
<head>
<title>Primer exemple amb POO</title>
</head>
<body>

<?php
class Alumne
{
var $nom;
var $dni;

public function anomenar($nom)
{
$this->nom=$nom;
}

public function dades($dni)
{
$this->dni=$dni;
}

public function imprimir()
{
echo $this->nom;
echo '<br>';
echo $this->dni;
echo '<br>';
}
}

$alumne1=new Alumne();
$alumne1->anomenar('Imena');
$alumne1->dades('23344556D');
$alumne1->imprimir();

echo '<br>';

$alumne2=new Alumne();
$alumne2->anomenar('Ketut');
$alumne2->dades('65544332E');
$alumne2->imprimir();
?>
</body>
</HTML>
