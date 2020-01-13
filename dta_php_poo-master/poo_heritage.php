<?php
abstract class Personne {  // abstract ne peu pas etre instensier ( donc impossible de faire un news)

    protected $firstName;    // protected est une proprieté comme private dans l'heritage mère mais visible dans l'heritage fille. 
    protected $lastName;
    
    function __construct($firstName, $lastName) { // les classes abstract sont utlisier en template   cela s'apelle Template Methode
        
        $this->firstName = $firstName;        
        $this->lastName = $lastName;
    }
    
    public function sayHello() {
        
        echo "Bonjour, je suis ".$this->getFullName().".";
        
        echo " Je suis ".$this->getMetier().".";
    }
    
    final protected function getFullName() {  // final  cela interdit l'heritage au classe filles
        
        return $this->firstName." ".$this->lastName;
    }
    
    abstract protected function getMetier();
}

class Auteur extends Personne {   //extends veut dire "herite" que Auteur herite de la clase Personne 

    protected $livres;
    
    function __construct($firstName, $lastName) {
        
        parent::__construct($firstName, $lastName);  
        $this->livres = [];
    }
    
    public function sayHello() {
        
        parent::sayHello();        
        echo " J'ai écrit ".count($this->livres)." livre(s).";
    }
    
    public function ecrireLivre($livre) {   // en PHP je peu rajouer des proprieté qu'1 par 1 
        
        $this->livres[] = $livre;
    }
    
    protected function getMetier() {
        
        return "Auteur";
    }
}

$auteur1 = new Auteur("Victor", "Hugo");

$auteur1->ecrireLivre("Les Misérables");  // je dois rappeler cette method a chaque livre que je veux rajouter, je peu pas en rajouter plusieurs a la fois

$auteur1->ecrireLivre("Les dernier jour d'un condamnés");

$auteur1->sayHello();