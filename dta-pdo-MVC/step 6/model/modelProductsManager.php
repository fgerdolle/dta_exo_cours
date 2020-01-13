<?php
class ProductsManager extends Manager {
    public function getProducts(){
    $bdd = $this->getConnect();
    $req = $bdd->query('SELECT id, nom, ville, code_postal , nombre_achat FROM products');
    $products =$req ->fetchAll();
    $req->closeCursor();
    return $products;
    }
}
