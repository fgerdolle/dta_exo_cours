<?php
require_once '../inc/autoload.php';

use Dao\UserDao;

$config = include '../inc/constants.php';
$userDao = new UserDao($config);
$users  = $userDao->findAllUsers();
$userDao->close();

   
require_once '../view/UsersView.php';