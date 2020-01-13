<?php
include_once 'date.php';
class Day
{

	//fonction appelé lorsqu'on créer un nouveau jour (nouveau day) (new Day())
	function __construct()
	{
		$this->myDate = new Date();//creation d'un date ( de ce jour la)
	}


	var $myDate;

	//écrit le HTML d'un jour
	function displayDay()
	{
		echo "<td class=\"calendarday\">".
		    "<div class=\"text\">".
		    $this->myDate->toString().//la classe date contient une fonction (tostring) qui donne la date.On appel cette fonction.
		    "</div>".
		  	"</td>";
	}
}
?>