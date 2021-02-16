<?php
session_start();
$_SESSION['id_usuari']  = $_REQUEST['usuari'];
$_SESSION['color_prefe'] = $_REQUEST['color'];
$_SESSION['contador'] = 0;
$id_usuari = $_SESSION['id_usuari'];
$colorpreferit= $_SESSION['color_prefe'];
$db = new mysqli('localhost','phpmyadmin','Felanitx2','variables');
$query= "SELECT nom_usuari from sessio where nom_usuari='$id_usuari'";
$verificar= $db->query($query);
$num_files = mysqli_num_rows($verificar);
if ($db->connect_error != null) {
      echo "An unexpected error happened.</br> Error number $db->connect_errno when conneting to the database.</br> Error message: $db->connect_error ";
      exit();
    }else{
      if ($num_files == 0){
        $query_insert="insert into sessio (nom_usuari, color_prefe) values ('$id_usuari', '$colorpreferit')";
        $result= $db->query($query_insert);
      	if ($result){
      	  echo "Ha funcionat!!!";
      	}else {
      	  echo "S'ha produit un error<br>";
      	}
      }else {
	echo "L'usuari ja existeix";
      }
}
$db -> close();
?>

<HTML>

<head>

<title>...continueu amb l'exemple de variables de sessió...</title>

</head>

<body>

Ja s'han emmagatzemat les variables de sessió.<br><br>

<a href="continuem.php">Vinga! Cap al final de l'exemple!</a>

</body>

</HTML>
