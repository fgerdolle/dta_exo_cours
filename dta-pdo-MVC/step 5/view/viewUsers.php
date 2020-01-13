<?php $title = 'USERS MVC' ; ?>

<?php ob_start(); ?>
<h1> Users MVC</h1>
<ul>

<?php


foreach($users as $user) {
?>    
    <li>
    <?php echo $user['id'].' - '.$user['lastName'].' - '.$user['firstName'] ?>
    </li>
    
<?php
} 
?>
</ul>
<?php $content = ob_get_clean(); ?>
<?php require('../template/template.php'); ?>