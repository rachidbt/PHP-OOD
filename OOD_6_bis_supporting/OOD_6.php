<html>
<head>
<title>OOD_6: inheritance exercise</title>
</head>
<body>
<?php

require "LivingBeing.php";
require "Cat.php";

//$person1=new PersonOOD6('Sebastia Sureda Riera',20);//using __construct from Person
$Cat1=new Cat (HEATH_CONDITION[0],LivingBeing::BEST_SENSE[0],50);
$Cat1->print();


//echo $person1->print();

try {

  $Cat1->oneYearOlder();
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}

$Cat2=new Cat (HEATH_CONDITION[0],LivingBeing::BEST_SENSE[0],53);
$Cat2->print();


//echo $person1->print();

try {

  $Cat2->oneYearOlder();
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}

 ?>
</body>
</html>
