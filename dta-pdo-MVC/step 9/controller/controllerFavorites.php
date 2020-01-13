<?php
require_once '../inc/autoload.php';

use DTA\Exercice\Model\ProductsManager;

$productsManager = new ProductsManager();


if (isset($_GET['id'])){
    $id = $_GET['id'];


$products = $productsManager -> getFavorites($id);
   
require_once '../view/viewFavorites.php';

}
