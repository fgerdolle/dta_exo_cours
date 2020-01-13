<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=MVC', 'root', 'Scorpion131188');
}
catch (PDOException $e) {
    print "Erreur : " . $e->getMessage() . "<br/>";
    die();
}
$req = $bdd->query('SELECT id, nom, ville, code_postal , nombre_achat FROM products');

   
require 'viewProducts.php';