<?php
class UsersManager extends Manager{
    public function getUsers(){
    $bdd = $this->getConnect();    
    $req = $bdd->query('SELECT id, firstName, lastName FROM users');
    $users =$req ->fetchAll();
    $req->closeCursor();
    return $users;
    }
}
