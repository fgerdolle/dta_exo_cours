<?php
class UsersManager {
    public function getUsers(){
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=MVC', 'root', 'Scorpion131188');
        }
        catch (PDOException $e) {
            print "Erreur : " . $e->getMessage() . "<br/>";
            die();
        }
    $req = $bdd->query('SELECT id, firstName, lastName FROM users');
    $users =$req ->fetchAll();
    $req->closeCursor();
    return $users;
    }
}
