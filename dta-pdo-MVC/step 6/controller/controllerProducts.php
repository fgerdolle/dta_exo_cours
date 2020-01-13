<?php
require_once '../model/modelManager.php';
require_once '../model/modelProductsManager.php';



$productsManager = new ProductsManager();

$products = $productsManager -> getProducts();
   
require_once '../view/viewProducts.php';