<?php
class Manager {
    protected function getConnect(){
            $bdd = null ;
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=MVC', 'root', 'Scorpion131188');
            }
            catch (PDOException $e) {
                print "Erreur : " . $e->getMessage() . "<br/>";
                die();
            }
            return $bdd;
    }
}