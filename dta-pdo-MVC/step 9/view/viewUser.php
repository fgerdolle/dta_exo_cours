<?php $title = 'USER MVC' ; ?>

<?php ob_start(); ?>
<h1> User MVC</h1>
<ul>



<li>
Id : <?php echo $user->id; ?>
</li>

<li>
 First Name : <?php echo $user->firstName; ?>
</li>

<li>
Last Name : <?php echo $user->lastName; ?>
</li>

<li>
Password : <?php echo $user->password; ?>
</li>


</ul>
<?php $content = ob_get_clean(); ?>
<?php require('../template/template.php'); ?>