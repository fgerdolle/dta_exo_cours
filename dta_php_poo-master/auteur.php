<?php
class Auteur {

    public $prenom;
    public $nom;

    function __construct($prenom, $nom) {
    
        $this->prenom = $prenom;
        
        $this->nom = $nom;
    }

    function getFullName(){
        return $this->prenom." ".$this->nom;
    }

    function sayHello($hello){
        echo $hello."Bonjour je suis ".$this->getFullName()." !";
    }



}

$auteur1 = new Auteur("Victor" , "Hugo");


echo "Auteur du jour : ".$auteur1->prenom." ".$auteur1->nom;




?>