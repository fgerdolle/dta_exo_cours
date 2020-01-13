<?php
require_once '../model/modelManager.php';
require_once '../domain/User.php';
require_once '../model/modelUsersManager.php';


use DTA\Exercice\Model\UsersManager;

$usersManager = new UsersManager();

$users = $usersManager -> getUsers();
   
var_dump($users); 