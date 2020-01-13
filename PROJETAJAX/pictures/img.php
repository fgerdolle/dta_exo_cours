<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

//second tableau plus performant en terme de détaille
$arrImgDeux = array(0 => ["titre" => "<h1>titre img une</h1>",
    "src" => "<img src='' alt='je suis image une'>",
    "description" => "je suis la description de l'image une"
],
    1 =>["titre"=>"<h1>titre image deux</h1>",
        "src"=>"<img src='' alt='je suis image deux'>",
        "description" => "je suis la description de l'image deux"
    ],
    2 =>["titre"=>"<h1>titre image trois</h1>",
        "src"=>"<img src='' alt='je suis image trois'>",
        "description" => "je suis la description de l'image trois"
    ]
);


$l = "";

if (isset($_GET["l"])) {
    
    $l=$_GET["l"];
    
    // error_log("in get : " .$l);
}
else if (isset($_POST["l"])) {
    
    $l=$_POST["l"];
    
    // error_log("in post : " .$l);
}




if (($l != "") && ($l > 0) && ($l <= count($arrImgDeux))) {


    //mise en place de la nouvelle version :


    foreach ($arrImgDeux as $img => $item ){
        if($img === $l -1){
            echo $item["titre"]."<br>";
            echo $item["src"]."<br>";
            echo $item["description"]."<br>";
        }
    }

    /*echo "<br>Image N° ".$l."<br>";
    echo $arrImg[$l-1];
        */
}    
else {
  echo "Entrez un nombre compris entre 1 et ".count($arrImgDeux)." !";
}

//recupération de l'élément id dans le doc AJAX.html
$doc = new DomDocument;
@$doc->LoadHTMLFile('ajax.html');
$content = $doc->saveXML($doc->getElementById('nombreDeImg'));
?>
