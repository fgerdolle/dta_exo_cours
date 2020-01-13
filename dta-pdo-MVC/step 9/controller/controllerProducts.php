<?php
require_once '../inc/autoload.php';

use DTA\Exercice\Model\ProductsManager;

$productsManager = new ProductsManager();

$products = $productsManager -> getProducts();
   
require_once '../view/viewProducts.php';