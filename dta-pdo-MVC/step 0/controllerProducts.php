<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PRODUCTS MVC</title>
    </head>
    <body>
        <h1> Products MVC</h1>
        <ul>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=MVC', 'root', 'Scorpion131188');
    
    $req = $bdd->query('SELECT id, nom, ville, code_postal , nombre_achat FROM products');

    $data = $req->fetchAll();
    
    foreach($data as $row) {
    ?>    
        <li>
        <?php echo $row['id'].' - '.$row['nom'].' - '.$row['ville'].' - '.$row['code_postal'].' - '.$row['nombre_achat'] ?>
        </li>
    
    <?php
    }
    $req->closeCursor();

    $result = null;
    
    $bdd = null;
} 
catch (PDOException $e) {
    print "Erreur : " . $e->getMessage() . "<br/>";
    die();
}
?>
        </ul>
    </body>
</html>