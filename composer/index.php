<?php 
use Carbon\Carbon;
use Respect\Validation\Validator;
use dta_exo_cours\composer\Domain\Student;

require('vendor/autoload.php');

$now = Carbon::now('Europe/Paris');

echo '<div>'.$now->format(DateTime::ISO8601).'</div>';

$birth = Carbon::create(1988, 11, 13, 18, 45, 0);

$student = new Student('Franck','Gerdolle');


echo 'je suis'.''.$student->getFullName();

echo '<br>';


echo 'je suis né le 13 11 1988';

echo '<br>';

echo "nombre de seconde depuis ma naissance :".$now->diffInSeconds($birth);

echo '<br>';

echo "nombre de mois depuis ma naissance :".$now->diffInMonths($birth);

echo '<br>';

echo "nombre de jour depuis ma naissance :".$now->diffInDays($birth);

echo '<br>';

echo "nombre d'année depuis ma naissance :".$now->diffInYears($birth);








