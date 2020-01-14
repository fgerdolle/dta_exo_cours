<?php
namespace test;

require_once '../inc/autoload.php';

use Dao\UserDao as UserDao;
use Domain\User as User;



$config = include '../inc/constants.php';
$UserDao = new UserDao($config);

$result = $UserDao->deleteUser(11);

if ($result) {
    echo 'Id a été supprimé';
}
else {
    echo 'Erreur lors de la suppression';
}






/*
$config = include '../inc/constants.php';

$UserDao = new UserDao($config);

$user1 = new User(null, 'Alberto', 'Contador', 'MDP');
        
        $id = $UserDao->insertUser($user1);

        echo 'User créé avec ID :' .$id;


 * UsersManager test case.

class UsersManagerTest  {

    private $usersManager;

    protected function setUp() {
        
        parent::setUp();
        
        $this->usersManager = new UsersManager();
    }

    protected function tearDown() {
        
        $this->usersManager = null;
        
        parent::tearDown();
    }
    /*
    public function testGetUsers() {
        
        $users = $this->usersManager->getUsers();
        
        $this->assertEquals(4, count($users));
    }
    
    public function testGetUser() {
        
        $user = $this->usersManager->getUser(1);
        
        $this->assertEquals(1, $user->id);
        
        $this->assertEquals('Bobby', $user->firstname);
        
        $this->assertEquals('Firmino', $user->lastname);
        
        $this->assertEquals('LFC', $user->password);
    }

}
    */


