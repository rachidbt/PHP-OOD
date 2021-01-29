<html>
<head>
<title>OOD_5: inheritance example</title>
</head>
<body>
<?php
require "person.php";//similar to include
require "student.php";
require "teacher.php";
require "Apprentice.php";

$teacher1=new Teacher('Rose','12345678A');//using __construct from Person
$teacher1->setSalary(10);
$student1=new Student('Pauline','98765432S');//using __construct from Person
$student1->setStudyField('ASIX');
$Apprentice1= new Apprentice();//using __construct from Apprentice
$Apprentice1->setFTCBusinessName('IES MANACOR');


echo $teacher1->print();//using method print implemented on Person class
echo $student1->print();//using method print implemented on Student class
echo $Apprentice1->print();//using method print implemented on Apprentice class
 ?>
</body>
</html>
