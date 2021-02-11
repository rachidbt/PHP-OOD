<?php

session_start();
$colores=$_SESSION['colour'];
?>

    <HTML>
    <head>

        <title>...i acabem l'exemple de variables de sessió!</title>

    </head>

    <body style="background-color:<?php echo $colores?>">

<?php
echo "L'usuari que havíeu escrit era: ".$_SESSION['id_user'];"<br>";

echo "La contrasenya que havíeu escrit era: $colores ";

$contador










?>
    </body>

    </HTML>
