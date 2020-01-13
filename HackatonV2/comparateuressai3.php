<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="">
        <link rel="stylesheet" href="styles/index.css">
        <title>Comparateur du site Equipe Bleu</title>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
function choix()
{
document.location.href="http://private/HackatonV2/comparateuressai2.php"; 
}
</script>
    </head>
    <body>
        <div class=container-fluid>
          
            <header>
                <h1><img width="80" height="110" src="pictures/Logo.png" align="left"/>DATABIBLIO42</h1>
                <br>
                <br>
                    <nav>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Carte</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link active" href="comparateuressai2.php">Comparateur</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="proposdenous.html"> Nous contacter</a>
                                </li>
                            </ul>
                        </nav>
                        </div>
            </header>
        </div>
        <?php $db = new PDO('mysql:host=localhost;dbname=Hackaton;charset=utf8', 'phpmyadmin', 'root');
        $requete = "SELECT * from Livres_pretes where id_mediateque = 1;";
    $result=$db->query($requete);
              while($donnees = $result->fetch())
          {

          ?>
            <td> 
              <p>
                <?php
                $livres = $donnees['nombre_de_livres'];
                $cd = $donnees['nombre_cd'];
                $films = $donnees['nombre_films'];

                ?>
              </p> 
            </td>
            <?php 
          }?>
        <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Type de supports', 'Hours per Day'],
          ['Livres',     parseInt('<?php echo $livres; ?>')],
          ['cd',      parseInt('<?php echo $cd; ?>')],
          ['films',  parseInt('<?php echo $films; ?>')]
        ]);

        var options = {
          title: '% des supports de la mediatheque selectionnee'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
        <div class="container">
            <div class="row">
                <div class="col-sm">
              <table class="table table-borderless "  id="tableone">
                <thead>
                  <tr>
                    <th scope="col" colspan="3" id="Critere">Critères :</th>
                    <th scope="col" colspan="3">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Données</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Villes</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">Noms </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadio4" value="option4">
                        <label class="form-check-label" for="inlineRadio4">Livres prêtés </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadio5" value="option5">
                        <label class="form-check-label" for="inlineRadio5">Livre achetés </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadio6" value="option6">
                        <label class="form-check-label" for="inlineRadio6">Support médias </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadio7" value="option7">
                        <label class="form-check-label" for="inlineRadio7">Nombre d'inscrits</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="inlineRadio8" value="option8">
                        <label class="form-check-label" for="inlineRadio8"> Accesibilité</label>
                      </div>
                    </th>
                    
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Villes
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked >
                        <label class="form-check-label" for="exampleRadios1">
                          St-Etienne
                        </label>
                      </div>
                      <div class="form-check">
						            <input type="checkbox" name="toto" value="toto" onClick="choix();"  />
                        <label class="form-check-label" for="exampleRadios2">
                          Roanne
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3" >
                        <label class="form-check-label" for="exampleRadios3">
                          St-Chamond
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" >
                        <label class="form-check-label" for="exampleRadios1">
                          Autre Villes
                        </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" >
                          <label class="form-check-label" for="exampleRadios1">
                            Autre Villes
                          </label>
                      </div>
                            
                    </th>
                    <td colspan ="6" id="chartcenter">
					
    <div id="piechart" style="width: 700px; height: 400px;"></div>





                    </td>
                    <td id="tablegraphique">
                        
                          <div class="form-check" id="tablegraphique">
                            <!-- <img src="pictures/chart02.png" id="chart"> -->
                            <label class= "form-label">Diagramme</label>
                            <input class="form-check-input" type="checkbox" name="tutu" value="tutu" onClick="choix(); " checked/>
                            <br>
                           <!-- <img src="pictures/frometon.png" id="chart"> -->
                            <label class= "form-label">Graphe</label>
                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                             <br>
                           <!-- <img src="pictures/bar_chart.png" id="chart"> -->
                            <label class= "form-label">Nuage de points</label>
                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3" >
                            <br>
                          </div>
                        
                        
                      </td>
                  </tr>
                </tbody>
                </table>
              </div>
              
        </div>
        
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
        <script src="scripts/index.js"></script>
    
    </body>
</html>