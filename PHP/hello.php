<html>
    <head>
        <title>Premier programme PHP</title>
    </head>
    <body>
    <!--
        ?php echo 'Hello World !' ; ?>
    
        $ = est la déclaration d'une variable en php et il faut toujours l'afficher même quand on l'appel
    -->
    <?php
    /*
       $message = "HellO World !";  
       echo $message;
    
       $name = "World";
       echo "Hello ".$name." !"; // en php le . permet la concatenation(ajouter) des éléments.

    
        $name = "world";
        echo "Hello $name !"; // la simple cote ' ne permet pas d'avoir des template string ( comme en JS) donc utiliser des double cote ".
    

        echo "<h2>Hello World ! </h2>"; // on peu creer du html du CSS avec php 
    

        $myNumber = 5;
        $myStr = "Vive la DTA !";

        echo '<h1>'.$myStr.'</h1>';
        echo '<p>'.($myNumber + $myNumber).'</p>';  // le + est une addition de ma variable $myNumber. 
    
    
        $myStr = "globalValue";
        echo "<p>Variable globale : ".$myStr."</p>";

        function myFunction()
        {
            $myLocalStr = "localValue";

            global $myStr; // pour ajouter une variable global à l'interieur d'une function.

            echo "<p> Acces depuis une fonction à une variable local : $myLocalStr</p>"; // double cote en ouverture et fermeture et simple cote à l'interieur.
        }
         myFunction(); // la porté des variables global sont global et des local sont local comme JS.
    */

      // la portée global des variable est visible dans les IF  à l'inverse des function qui a besoin du mots clef "global" nomdemavariable.
    
      function myFunction()
      {
        static $cpt = 0; // avec le mot clef "static" ma function reste en place et ne peu pas être redefinie a chaque nouvelle entrer dans ma function.
        echo "<p> Acces depuis une fonction à une variable local : $cpt</p>"; // double cote en ouverture et fermeture et simple cote à l'interieur.
        $cpt++;
      }

      myFunction();
    
    
    ?>               
    </body>
</html>