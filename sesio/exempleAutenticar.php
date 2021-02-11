<?php
session_start();
$_SESSION['id_user']  = $_REQUEST['user'];
$_SESSION['colour'] = $_REQUEST['colour'];
?>
<?php
$user = $_POST["user"];
$colour = $_POST["colour"];
$vegades = $_POST["vegades"];
$servername="10.100.65.175";
$user="phpmyadmin";
$password="1234";
$connname="variables";


//connect to the data base
//ADD INFORMATION NEEDED TO CONNECT TO YOUR DATABASE
$conn = new mysqli($servername,$user,$password,$connname);
//check if there is any problem to connect to the data base
if ($conn->connect_error != null) {
  echo "An unexpected error happened.</br> Error number $conn->connect_error when conneting to the database.</br> Error message: $conn->connect_error ";
  exit();
}else{
  //check if the user already exist in the table dades as is a primary key
  $query_select="select * from dades where user='$user'";
  //echo "query_select $query_select</br>";
  $result_select = $conn->query($query_select);
  $dades=$result_select->fetch_object();

   if($dades != null){
          echo "The user already exist, so it cannot be added. Go to Read or Update in case you need it</br>";
    }else{
          echo "Inserting";
          $query_insert="INSERT INTO dades VALUES ('$user', '$colour')";
          //echo "query_insert $query_insert</br>";
          //insert the fields and values in the table dades
          $result = $conn->query($query_insert);
          echo "result $result</br>";
          //if result os true the Insert has been done successfully
          if($result){
            echo "A new row with the info as follows has been added to the table </br>";
            //An error happened
          }else if ($conn->error != null){
              echo "An unexpected error happened.</br> Error number $conn->error when inserting to the database.</br> Error message: $conn->error </br>";
              exit();
              //sth else happened
          }else{
            echo "Something unexpected happened</br>";
          }
      }
  //connection has to be closed()
  $conn->close();
}
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
