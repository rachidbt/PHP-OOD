<?php

session_start();

$usuari = $_SESSION['id_usuari'];
$color = $_SESSION['color_prefe'];
$conta = ++$_SESSION['contador'];

echo $conta;

$db = new mysqli('localhost','phpmyadmin','Felanitx2','variables');
$query_update="update sessio set nombre_visites='$conta' where nom_usuari='$usuari'";
$result= $db->query($query_update);
?>

    <HTML>

    <head>

        <title>...i acabem l'exemple de variables de sessió!</title>
	<style>
		body {
  			background-color: <?php echo $color ?>;
		}
	</style>
    </head>

    <body>

        <?php

echo "Usuari que havíeu escrit era: ".$_SESSION['id_usuari'];echo "<br>";

echo "La contrasenya que havíeu escrit era: ".$_SESSION['color_prefe'];

if ($conta>4) {
  echo "<form action='form.php' method='post'> POSA LA TEVA CONTRASENYA:<input type='password' name='passwd'> <input type='submit' value='Envia!'></form>";
}
$db->close();
?>

    </body>

    </HTML>
