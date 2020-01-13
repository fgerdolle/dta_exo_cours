<?php
require_once '../model/modelManager.php';
require_once '../model/modelUsersManager.php';

use DTA\Exercice\Model\Manager;
use DTA\Exercice\Model\UsersManager;

$usersManager = new UsersManager();

$users = $usersManager -> getUsers();
   
require_once '../view/viewUsers.php';