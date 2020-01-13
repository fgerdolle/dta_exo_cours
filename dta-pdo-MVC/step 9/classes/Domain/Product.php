<?php
namespace DTA\Exercice\Domain;

class Product {
    public $id;
    public $nom;
    public $ville;
    public $code_postal;
    public $nombre_achat;


    public function __construct($id,$firstName,$lastName, $password) {

        $this->id = $id;
        $this->nom = $nom;
        $this->ville = $ville;
        $this->code_postal = $code_postal;
        $this->nombre_achat = $nombre_achat;
       
    }

}