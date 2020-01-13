<?php $title = 'PRODUCTS MVC' ; ?>

<?php ob_start(); ?>
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
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>