<?php
require '../inc/autoload.php';

use DTA\Exercice\Model\UsersManager;
use DTA\Exercice\Domain\User;

 $users = new UsersManager();
 
   
    $user = $users->getUser(1);
      
        var_dump($user);
     


