<?php
require_once '../model/modelManager.php';
require_once '../model/modelProductsManager.php';

use DTA\Exercice\Model\Manager;
use DTA\Exercice\Model\ProductsManager;

$productsManager = new ProductsManager();

$products = $productsManager -> getProducts();
   
require_once '../view/viewProducts.php';