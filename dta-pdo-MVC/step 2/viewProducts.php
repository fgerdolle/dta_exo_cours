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

$data = $req->fetchAll();

foreach($data as $row) {
?>    
    <li>
    <?php echo $row['id'].' - '.$row['nom'].' - '.$row['ville'].' - '.$row['code_postal'].' - '.$row['nombre_achat'] ?>
    </li>
    
<?php

$req->closeCursor();

$result = null;

$bdd = null;
} 
?>
        </ul>
    </body>
</html>