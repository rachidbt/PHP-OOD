<html>
<head>
</head>
<body>
<?php

require "accommodation.php";
require "ruralacc.php";
require "businessacc.php";


$ruralacc1=new ruralacc('si',INST_AIRE_LLIURE[2],10,MENJADOR[0]);
$businessacc1=new businessacc(accommodation::MENJADOR[1]);




try {
  $businessacc1->checkin();
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}
?>
</body>
</html>
