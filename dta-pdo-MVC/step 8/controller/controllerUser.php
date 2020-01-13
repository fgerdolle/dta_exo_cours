<?php
require_once '../inc/autoload.php';


use DTA\Exercice\Model\UsersManager;

$usersManager = new UsersManager();

$users = $usersManager -> getUsers();
   
require_once '../view/viewUsers.php';