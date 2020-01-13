<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>USERS MVC</title>
    </head>
    <body>
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
    </body>
</html>