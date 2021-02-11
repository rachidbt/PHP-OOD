<?php
session_start();
$_SESSION['id_user']  = $_REQUEST['user'];
$_SESSION['colour'] = $_REQUEST['colour'];
?>
<?php
$user = $_POST["user"];
$colour = $_POST["colour"];
$servername="10.100.65.175";
$username="phpmyadmin";
$password="1234";
$dbname="variables";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO dades VALUES ('$user','$colour')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
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
