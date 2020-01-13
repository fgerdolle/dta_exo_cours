<?php $title = 'USERS MVC' ; ?>
<?php $title = 'USERS MVC' ; ?>

<?php ob_start(); ?>
<h1> Users MVC</h1>
<ul>

<?php


foreach($users as $user) {
?>    
    <li>
    <?php echo $user->id; ?> -  <?php echo $user->lastName; ?> -  <?php echo $user->firstName; ?> -  <?php echo $user->password; ?>
    </li>
    
<?php



 




?>
</ul>
<?php $content = ob_get_clean(); ?>
<?php require('../template/template.php'); ?>