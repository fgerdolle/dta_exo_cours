<?php
include 'character-sheet/' . $_GET["character"] . '.php';
?>



<!DOCTYPE html>
<html>
<head>
    <title><?php echo $charactername; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
	<link rel="stylesheet" href="../css/katay.css">
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
	<div class="container-fluid">
		<div class="row">
		
			<div class="col-md-5 text-center">
				<img src="<?php echo $picture; ?>" class="autoresize" id="picture"/> 
			</div>
						
			<div class="col-md-7"> <!-- text colonne -->
				<h1 class="text-center"> <?php echo $charactername; ?>   </h1> <!-- name/title of character --> 
				
				<div id="charaterstats">
					<span class="characterstat">Nom:</span> <?php echo $charactername; ?> <br>				
					<span class="characterstat">Race:</span> <?php echo $species; ?>  <br>				
					<span class="characterstat">Orientation Sexuelle:</span> <?php echo $sexuality; ?>  <br>				
					<span class="characterstat">Relation:</span> <?php echo $relationship; ?>  <br>				
					<span class="characterstat">Divinité:</span> <?php echo $divinity; ?> <br>				
					<span class="characterstat">Classe:</span> <?php echo $class; ?> <br>					
					<span class="characterstat">Age/Taille/Poids:</span> <?php echo $bodytype; ?> <br>					
					<span class="characterstat">Couleur des Yeux/Peau/Cheveux:</span> <?php echo $colors; ?> <br>					
					<span class="characterstat">Signe Particulier:</span> <?php echo $originalfeat; ?> <br>					
					<span class="characterstat">Comportement:</span> <?php echo $behaviour; ?> <br>
				</div>
				<br>
				
				<div id="background"> 
					<h2>Histoire:</h2> 				
					<?php echo $background; ?>
				</div>
				
				<div id="equipement">
					<span class="characterstat">Arme:</span> <?php echo $weapon; ?> <br>
					<span class="characterstat">Armure:</span> <?php echo $armor; ?> <br>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>


