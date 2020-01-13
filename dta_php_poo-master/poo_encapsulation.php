<?php
class Student  {
    
    const COUNTER_PREFIX = "A ce stade, nombre de student inscrit : ";
    
    const HTML_NEW_LINE = "<br><br>";

    private static $COUNT = 0;

    private $firstName;
    
    private $lastName;

    private $nationalite;
    
    function __construct($firstName, $lastName, $nationalite) {
    
        $this->firstName = $firstName;
        
        $this->lastName = $lastName;

        $this->nationalite = $nationalite;

        self::incrementCounter();
    }
    
    private static function incrementCounter() {
        
        self::$COUNT++;
    }
    
    static function displayCounter() {
        
        echo self::COUNTER_PREFIX.self::$COUNT;
    }

    public function sayHello() {
        
        echo $this->getFullName();
    }
    
    private function getFullName() {
        
        return $this->firstName." ".$this->lastName." ".$this->nationalite;
    }
    
    public function getFirstName() {
        
        return $this->firstName;
    }
    
    public function getLastName() {
        
        return $this->lastName;
    }
    
    public function setLastName($lastName) {
        
        $this->lastName = $lastName;
    }

    public function getNationalite($nationalite){
        $this->nationalite = $nationalite;
    }

    public function setNationalite($nationalite){
        $this->nationalite = $nationalite;
    }
}

Student::displayCounter();

echo Student::HTML_NEW_LINE;


$student1 = new Student("Alexandra", "Dupont" , "Française");

$student1->sayHello();

echo "<br>---------<br>";

$student1->setLastName("Durand");

$student1->sayHello();

echo "<br>---------<br>";

$student2 = new Student("Thibaut", "Gerin" , "Elf");

$student2->sayHello();

echo "<br>---------<br>";

$student2->setNationalite("Elf Roux");

$student2->sayHello();

echo "<br>---------<br>";

Student::displayCounter();

echo Student::HTML_NEW_LINE;