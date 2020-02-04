<?php
namespace dta_exo_cours\composer\Domain;
class Student {
    public $firstName;
    
    public $lastName;

    
    public function __construct($firstName, $lastName) {
        
        $this->firstName = $firstName;
        
        $this->lastName = $lastName;

    }
    public function getFullName(){
        return ' '.$this->firstName.' '.$this->lastName;
    }
}