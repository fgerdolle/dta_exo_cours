<?php
class Personne {

    public $firstName;

     public $lastName;
    
    function __construct($firstName, $lastName) {
        
        $this->firstName = $firstName;        
        $this->lastName = $lastName;$firstName;
    }
    
    function sayHello() {
        
        echo "Bonjour, je suis ".$this->getFullName().".";
        
    }
    
  

    function getFullName() {
        
        return $this->firstName." ".$this->lastName;
    }
    
}

class Sexe extends Personne {
    public $sexe;

    function __construct($firstName, $lastName) {
        
        parent::__construct($firstName, $lastName);
          $this->sexe = $sexe ;
        
    } 
          
    function sayHello() {
        
            parent::sayHello();        
            echo " Je suis ".$this->sexe;
        }

}


$personne1 = new Personne("Victor", "Hugo");



$personne1->sayHello();