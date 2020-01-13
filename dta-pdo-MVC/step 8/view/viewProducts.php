<?php $title = 'PRODUCTS MVC' ; ?>

<?php ob_start(); ?>
<h1> Products MVC</h1>
<ul>
        
<?php


foreach($products as $product) {
?>    
    <li>
    <?php echo $product['id'].' - '.$product['nom'].' - '.$product['ville'].' - '.$product['code_postal'].' - '.$product['nombre_achat'] ?>
    </li>
    
<?php

} 
?>
</ul>
<?php $content = ob_get_clean(); ?>
<?php require('../template/template.php'); ?>