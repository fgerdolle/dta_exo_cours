<?php
require '../model/modelUsers.php';

$req = getUsers();
   
require '../view/viewUsers.php';