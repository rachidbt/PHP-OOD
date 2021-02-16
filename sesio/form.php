<?php
session_start();

$db = new mysqli('localhost','phpmyadmin','Felanitx2','variables');

$usuari = $_SESSION['id_usuari'];
$_SESSION['contrasenya']=$_REQUEST['passwd'];
  $contrasenya=$_SESSION['contrasenya'];
if ($contrasenya){
  $query_update2="update sessio set contrasenya='$contrasenya' where nom_usuari='$usuari'";
  $result1= $db->query($query_update2);
  echo $contrasenya. "<br>";
  echo $usuari. "<br>";
}
$query_select= "select contrasenya from sessio where nom_usuari='$usuari'";
$result2= $db->query($query_select);

$contra=$_POST['contra'];

echo $contra;
?>
<HTML>

<head>

    <title>VERIFICAR CONTRA</title>

    <style>body {background-color: <?php echo $_GET['fons'];?>;}</style>
</head>

<body>
if ($contrasenya){
echo "<form method='post'>Posa la teva contrasenya: <input type='password' name='contra'><input type='submit' value='ENVIA!'></form>";
}
$verify = $result2->fetch_assoc();
if ($contra == $verify['contrasenya']){
   echo "<form>TRIA EL COLOR DE FONS: <input type='text' name='fons'></form>";
   $query_update2="update sessio set color_prefe='$fons' where nom_usuari='$usuari'";
  $result3= $db->query($query_update2);
}
?>
</body>

</HTML>
