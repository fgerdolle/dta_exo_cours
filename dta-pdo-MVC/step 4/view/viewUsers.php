<?php $title = 'USERS MVC' ; ?>

<?php ob_start(); ?>
<h1> Users MVC</h1>
<ul>

<?php
$data = $req->fetchAll();

foreach($data as $row) {
?>    
    <li>
    <?php echo $row['id'].' - '.$row['lastName'].' - '.$row['firstName'] ?>
    </li>
    
<?php

$req->closeCursor();

$result = null;

$bdd = null;
} 
?>
</ul>
<?php $content = ob_get_clean(); ?>
<?php require('../template/template.php'); ?>