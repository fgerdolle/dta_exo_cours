<?php
require '../model/modelUsersManager.php';

$usersManager = new UsersManager();

$users = $usersManager -> getUsers();
   
require '../view/viewUsers.php';