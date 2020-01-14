var imgChoose = document.querySelector('select');
var imgDisplay = document.querySelector('pre');


var requestURL = 'data/data.json';
var request = new XMLHttpRequest();
request.open('GET', requestURL);
request.responseType = 'json';
request.send();


request.onload = function() 
{
    
    var imgrigolo = request.response;
  
    showPre(imgrigolo);
}




function showPre(jsonObj)
{
    var img = jsonObj.blibli; // on recupere le tableau de membre de super hero contenu dans le json

    for(var i = 0; i < img.length; i++) // on creer une boucle for pour parcourir le tableau de superhero
    {  
        
        var myArticle = document.createElement('article');
        //id_img

        var myH2 = document.createElement('h2');         //nom artiste
        
        var myPara1 = document.createElement('p');         //titre
        
        var myPara2 = document.createElement('p');         // et le lien connard

        var myPara4 = document.createElement('p');
        
        var myPara3 = document.createElement('p');
        
        var myList = document.createElement('ul');
        
        myH2.textContent = img[i].nom;         //nom artiste
        
        myPara1.textContent = 'Secret identity: ' + img[i].secretIdentity;         //titre
        
        myPara2.textContent = 'Age: ' + img[i].age;         // et le lien connard

        if (img[i].gender)
        {
            myPara4.textContent = 'Gender: ' + img[i].gender;
        }

        myPara3.textContent = 'Superpowers:';
        
        var superPowers = img[i].powers;
        
        for(var j = 0; j < superPowers.length; j++) 
        {
        
            var listItem = document.createElement('li');
            
            listItem.textContent = superPowers[j];
            
            myList.appendChild(listItem);
        }

        myArticle.appendChild(myH2);         //nom artiste
        
        myArticle.appendChild(myPara1);         //titre
        
        myArticle.appendChild(myPara2);         // et le lien connard

        if (heroes[i].gender)
        {
            myArticle.appendChild(myPara4);
        }

        myArticle.appendChild(myPara3);

        myArticle.appendChild(myList);
        
        section.appendChild(myArticle);
    }
}

verseChoose.onchange = function() 
{
    var verse = verseChoose.value;
    updateDisplay(verse);
};

function updateDisplay(verse){
  var url = 'scripts/data/data.json';

  fetch(url)
      .then(  //quand on a la réponse de la promesse avec ajax du serveur
        function(response){
          response.text()
              .then(  // idem pour la réponse de promesse
                function(text){
                  poemDisplay.textContent = text;
                })
              
        })
}

updateDisplay('vers1');

verseChoose.value = 'vers1';

