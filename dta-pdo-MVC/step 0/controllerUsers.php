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
try {
    $bdd = new PDO('mysql:host=localhost;dbname=MVC', 'root', 'Scorpion131188');
    
    $req = $bdd->query('SELECT id, firstName, lastName FROM users');

    $data = $req->fetchAll();
    
    foreach($data as $row) {
    ?>    
        <li>
        <?php echo $row['id'].' - '.$row['lastName'].' - '.$row['firstName'] ?>
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