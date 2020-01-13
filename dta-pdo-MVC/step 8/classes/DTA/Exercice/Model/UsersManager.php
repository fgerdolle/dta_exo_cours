<?php
namespace DTA\Exercice\Model;

use DTA\Exercice\Domain\User;

class UsersManager extends Manager{
    public function getUsers(){
    $users =[];
    $bdd = $this->getConnect();    
    $req = $bdd->query('SELECT id, firstName, lastName, password FROM users');
    /*
    $trucusers =$req ->fetchAll();
    $req->closeCursor();
    
    foreach($trucusers as $item){
        $user = new User($item["id"],$item["firstName"],$item["lastName"],$item["password"]);

        $users[] = $user;
    }
    */
    while ($item = $req->fetch()){
        $user = new User($item["id"],$item["firstName"],$item["lastName"],$item["password"]);

        $users[] = $user;
    } 
    $req->closeCursor();
    return $users;
    }
}
