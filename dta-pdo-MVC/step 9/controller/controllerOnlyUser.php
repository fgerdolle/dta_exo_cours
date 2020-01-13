<?php
require_once '../inc/autoload.php';


use DTA\Exercice\Model\UsersManager;

$usersManager = new UsersManager();

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $user = $usersManager -> getUser($id);
}

require_once '../view/viewUser.php';