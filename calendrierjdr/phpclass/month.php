<?php
include_once 'day.php';
class Month
{	//fonction appelé lorsqu'on créer un nouveau mois (new Month())
	function __construct()
	{
		$this->days=array();//creation d'un tableau vide dans days
		
		//creation d'une boucle qui sera appelé 31 fois.
		for ($i = 1; $i <= 31; $i++)
		{
    		 array_push($this->days, new Day());//on rempli le tableau de 1 Day ainsi on à creer un nouveau jour.
		}
	}

	var $days;//un tableau des 31 jours du mois.

	//écrit le HTML d'un mois.
	function displayMonth()
	{
		echo "<table border=\"1\">";
		
		//On va ouvrir  et fermer 5 <tr>, et dans chacun d'entre eux,on va écrire 7 jours de notre tableau days afin d'avoir 31 jours.
		echo "<tr>";
		for ($i = 0; $i <= 6; $i++)
		{
			$this->days[$i]->displayDay();
		}
		echo "</tr>";

		echo "<tr>";
		for ($i = 7; $i <= 13; $i++)
		{
			$this->days[$i]->displayDay();
		}
		echo "</tr>";

		echo "<tr>";
		for ($i = 14; $i <= 20; $i++)
		{
			$this->days[$i]->displayDay();
		}
		echo "</tr>";

		echo "<tr>";
		for ($i = 21; $i <= 27; $i++)
		{
			$this->days[$i]->displayDay();
		}
		echo "</tr>";

		echo "<tr>";
		for ($i = 28; $i <= 30; $i++)
		{
			$this->days[$i]->displayDay();
		}
		echo "</tr>";
		
		echo "</table>";
	}
}
?>