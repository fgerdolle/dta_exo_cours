<?php
require '../model/modelProductsManager.php';

$productsManager = new ProductsManager();

$products = $productsManager -> getProducts();
   
require '../view/viewProducts.php';