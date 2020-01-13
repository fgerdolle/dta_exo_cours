<?php
require_once '../model/modelManager.php';
require_once '../model/modelUsersManager.php';

$usersManager = new UsersManager();

$users = $usersManager -> getUsers();
   
require_once '../view/viewUsers.php';