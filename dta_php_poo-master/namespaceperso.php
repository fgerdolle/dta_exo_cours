<?php
include 'first/perso.php';
include 'second/perso.php';
include 'third/perso.php';

/*
$client1 = new \Dta\First\Client();
$client1->sayHello();

echo "<br><br>";

$client2 = new \Dta\Second\Client();
$client2->sayHello();
*/

use \Dta\First\perso as Perso1;
use \Dta\Second\perso as Perso2;
use \Dta\Third\perso as Perso3;

$perso1 = new Perso1();
$perso1->sayHello();

echo "<br><br>";

$perso2 = new Perso2();
$perso2->sayHello();


echo "<br><br>";

$perso3 = new Perso3();
$perso3->sayHello();
