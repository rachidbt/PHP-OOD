<?php
session_start();

$db = new mysqli('localhost','phpmyadmin','Felanitx2','variables');

$usuari = $_SESSION['usuari'];
$_SESSION['password']=$_REQUEST['passwd'];
  $password=$_SESSION['password'];
if ($password){
  $query_update2="update var_sessio set password='$password' where usuari='$usuari'";
  $result1= $db->query($query_update2);
  echo $password. "<br>";
  echo $usuari. "<br>";
}
$query_select= "select password from var_sessio where usuari='$usuari'";
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
<?php
if ($password){
echo "<form method='post'>Posa la teva password: <input type='password' name='contra'><input type='submit' value='ENVIA!'></form>";
}
$verify = $result2->fetch_assoc();
if ($contra == $verify['password']){
   echo "<form>TRIA EL COLOR DE FONS: <input type='text' name='fons'></form>";
   $query_update2="update var_sessio set color='$fons' where usuari='$usuari'";
  $result3= $db->query($query_update2);
}
?>
</body>

</HTML>
