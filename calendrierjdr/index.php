<?php include 'phpclass/month.php'; ?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Agenda JDR MonFuturFils</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/agenda.css">
</head>
<body>
		  <?php
		  	$month = new Month();
		  	$month->displayMonth();
		  ?>
</body>
</html>