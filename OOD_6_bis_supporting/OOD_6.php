<html>
<head>
<title>OOD_6: inheritance exercise</title>
</head>
<body>
<?php

require "LivingBeing.php";
require "Cat.php";

$Cat1=new Cat (HEATH_CONDITION[0],LivingBeing::BEST_SENSE[0],50);
$Cat1->print();



try {

  $Cat1->oneYearOlder();
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}

$Cat2=new Cat (HEATH_CONDITION[0],LivingBeing::BEST_SENSE[0],53);
$Cat2->print();



try {

  $Cat2->oneYearOlder();
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}

 ?>
</body>
</html>
