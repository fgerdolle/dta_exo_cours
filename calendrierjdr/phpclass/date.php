<?php
class Date
{ 	

	var $day = 1;
	var $month = 1;
	var $year = 1970;
	
    //retourne le texte de cette date. exp: 1 janvier 1970
	function toString()
	{
		$result = "";
		$result = $result.$this->day." ";
		$result = $result.$this->monthToString($this->month) ." ";
		$result = $result.$this->year;
		return $result;
	}

    //elle convertie les numero des mois sous leur forme écrite. ( 11 = Novembre).
	function monthToString($monthconvert)
	{
		switch ($monthconvert) 
		{
    		case 1:
    			return "Janvier";
    		case 2:
    			return "Fevrier";
    		case 3:
    			return "Mars";
    		case 4:
    			return "Avril";
    		case 5:
    			return "Mai";
    		case 6:
    			return "Juin";
    		case 7:
    			return "Juillet";
    		case 8:
    			return "Aout";
    		case 9:
    			return "Septembre";
    		case 10:
    			return "Octobre";
    		case 11:
    			return "Novembre";
    		case 12:
    			return "Decembre";

		}
	}

}
?>