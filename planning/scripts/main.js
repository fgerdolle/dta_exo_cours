
//var camarade = ['Franck', 'Thibaul' , 'Pierre' , 'Loic' , 'Alex']

// example de boucle
//for (var index = 0; index < camarade.length; index++)
//{   console.log(camarade[index]);}

// example de boucle a l'envers
//var camarade = ['Franck', 'Thibaul' , 'Pierre' , 'Loic' , 'Alex']

//for (var index = camarade.length - 1; index >= 0; index--)
//{    console.log(camarade[index]);}


//apprendre une fonction
//function displaymessage()
//{    console.log('message');}

//displaymessage();

//function multiply(num1,num2)
//{    var result = num1 * num2;    return result;}
//je dois rajouter des parametre a l'interieur de ma fonction elle meme a l'interieur du console.log sinon cela ne fonction pas
//console.log(multiply(7,7));

//var prefix ='message : ';
//var french = buildMessage('Bonjours');
//var english = buildMessage('Hello');
//var italiano = buildMessage('Ciao');

//function buildMessage(msg)
//{    var result = prefix + msg ;    return result; }

//console.log(french);
//console.log(english);
//console.log(italiano);

//fonction + element HTML et evenementiel
var counter = 0;
var click = document.getElementById('nbClicks');
click.textContent = 0;

function incrementcounter () 
{
     counter = counter + 1 ;
     //alert('OUTCH! STOP POKING ME!');
     click.textContent = counter ;
     
}
document.querySelector('img').onClick = incrementcounter;

//changer une image en clic

//function changeImage ()
//{    document.querySelector("img").src="pictures/newimgdta.png";}
 
//document.querySelector('img').onclick = changeImage;


// deuxieme technique

var myImage = document.querySelector('img');

myImage.onclick = function()
{
     var mySrc = myImage.src ;

     if (mySrc.endsWith('pictures/imagedta.jpeg'))
     {
          myImage.src = 'pictures/newimgdta.png';
          console.log(myImage);
     }
     else 
     {
          myImage.src = 'pictures/imagedta.jpeg';
          console.log(myImage);
     }
}

