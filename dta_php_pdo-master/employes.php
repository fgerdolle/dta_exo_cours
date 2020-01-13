<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Employees</title>
    </head>
    <body>
        <h1>Employees de la BDD Classic Models</h1>
        <table border=1 >
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'Scorpion131188');
    
    $req = $bdd->query(
        'SELECT employeeNumber, firstName, lastName, jobTitle
         FROM employees
         ORDER BY lastName,firstName');

    $data = $req->fetchAll();
    
    foreach($data as $row) {
        
        echo('<tr>'.
        "<td><a href=\"employeeDetails.php?id=".$row['employeeNumber']."\">".$row['employeeNumber']."</a></td>".
        '<td>'.$row['firstName'].'</td>'.
        '<td>'.$row['lastName'].'</td>'.
        '<td>'.$row['jobTitle'].'</td>'.
        '</tr>');
    }

    $result = null;
    
    $bdd = null;
} 
catch (PDOException $e) {
    print "Erreur : " . $e->getMessage() . "<br/>";
    die();
}
?>
        </table>
    </body>
</html>