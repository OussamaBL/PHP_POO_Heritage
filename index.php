<?php 
require "classes/Etud.php";
// use Etud\Etud;

$p=new Person('Tergui','K0000','tergui@gmail.com','0644595432');
$p1=new Person('Wisal','K1111','wisal@gmail.com','0644595423');
$p2=new Person('yassine','K0011','yassine@gmail.com','0644595432');
$p3=new Person('aymane','K0044','aymane@gmail.com','0644595432');
$p4=new Person(' fatima zohra ','K0044','fatima@gmail.com','064459544393953884');

$et=new Etud(' Tergui ','K0000','tergui@gmail.com','0644595432',20,"dev");
$et->toString();
$persons=[$p,$p1,$p2,$p3,$p4];
foreach($persons as $person) echo "Name : ".$person->getName()." <br> Cin : ".$person->getCin()." <br> Email : ".$person->getEmail()." <br> Phone : ".$person->getPhone()."  <br> <===============> <br>";

