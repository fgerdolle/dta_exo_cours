
/*
//exo1
var a = 12;
var b = 2;
var c = a * b;

var outputExo1 = 'Exo1 : c = ' + c ;

document.getElementById('outputExo1').textContent = outputExo1;

//exo2
var d = 14;
var e = 17;

var temp = e;
var temp2 = d;

d = temp;  
e = temp2;

var outputExo2 = 'Exo2 : d = ' + d +' e = ' + e ;

document.getElementById('outputExo2').textContent = outputExo2;

//exo3
var f = '14';
var g = '17';
var h = f + g;

var outputExo3 = 'Exo3 : h = ' + h ;

document.getElementById('outputExo3').textContent = outputExo3;

//exo4 prompt = l'user rentre une donnée voulu
var prixHt = prompt('Prix Hors taxe de l\'article');
var prixTtc = 1.196 * prixHt ;

var outputExo4 = 'Exo4 : Prix TTC = ' + prixTtc;

document.getElementById('outputExo4').textContent = outputExo4;


//exo5
var firstName = prompt('Entrer votre prénom');
var lastName = prompt('Entre votre nom');

var outputExo5 = 'Exo5 : Le nom complet est ' + firstName + ' ' + lastName;

document.getElementById('outputExo5').textContent = outputExo5;

//exo6  parseInt = indique que dans le prompt se sera un number et non un text
var firstNumber = parseInt(prompt('Entre votre 1er nombre'));
var secondNumber = parseInt(prompt('Entrer votre deuxieme nombre'));

var outputExo6 = ' ' ;

if (firstNumber > secondNumber)
{
    outputExo6 = 'Exo6  : le 1er nombre est superieur au deuxieme nombre';
}
else if (firstNumber < secondNumber)
{
    outputExo6 = ' Exo6  : le 2eme nombre est superieur au premier nombre';
}
else 
{
    outputExo6 = 'Exo6  : les deux nombres sont égaux';
}

document.getElementById('outputExo6').textContent = outputExo6;

//exo7
var userAge = parseInt(prompt('Entrer votre age'));

var outputExo7 = ' ' ;

if (userAge < 10)
{
    outputExo7= 'Exo7 = Je te propose de regarder "Le monde de Nemo"';
}

else if (userAge>=10 && userAge<18)
{
    outputExo7= 'Exo7 = Je te propose de regarder "Matrix"';
}
// ne jamais mettre de parametre dans le dernier else
else 
{
    outputExo7= 'Exo7 = Je te propose de regarder "Le silence des agneaux"';
}

document.getElementById('outputExo7').textContent = outputExo7;

//Exo8
var userNumber=parseInt(prompt('Entrer un nombre entre 0 et 10'));
var correctNumber = 7;

var outputExo8 = '';

//!= = n'est pas égal
while (userNumber != correctNumber)
{
    userNumber=parseInt(prompt(' Faux ! Entrer un nombre entre 0 et 10'));
}


outputExo8 = 'Exo8 : Bravo 7 était le bon nombre! ';


document.getElementById('outputExo8').textContent = outputExo8;

//Exo9
var userNumber2=parseInt(prompt('Entrer un nombre entre 0 et 100'));
var outputExo9 = '';


while(userNumber2 >= 0)
{
    outputExo9 = outputExo9 + userNumber2 + ' ';

    userNumber2 = userNumber2 - 1 ;
}

document.getElementById('outputExo9').textContent = outputExo9;


//exo10
var userNumber3=parseInt(prompt('Entrer un nombre entre 0 et 10'));
var correctNumber2 = 7;

var outputExo10 = '';

//!= = n'est pas égal
while (userNumber3 != correctNumber2)
{
    if(userNumber3 < correctNumber2)
    {
        userNumber3=parseInt(prompt(' Faux ! le bon nombre est plus grand')) ;
    }
    else
    {
        userNumber3=parseInt(prompt(' Faux ! le bon nombre est plus petit')) ;
    }
}


outputExo10 = 'Exo10 : Bravo 7 était le bon nombre! ';


document.getElementById('outputExo10').textContent = outputExo10;


//Exo11 methode barbare
/*
var number2 = [2 , 4 , 6 , 8 , 10];
var result = number2[0] + number2[1] + number2[2] + number2[3] + number2[4];

outputExo11 = 'Exo11 : ' + result;

document.getElementById('outputExo11').textContent = outputExo11;
*/
/*
//exo11 methode classique
var arrayNumber=[2 , 4 , 6 , 8 , 10];
var result1 = 0;

outputExo11 = 'Exo11 : ';

// je creer une variable i = 0 ,  la seconde indique que tant que 1 plus petit que le tableau et enfin a chaque boucle j'incremente un des nombre du tableau (1++)
for (var i = 0 ; i < arrayNumber.length ; i++ )
{
    result1 += arrayNumber[i];
}
document.getElementById('outputExo11').textContent = outputExo11 + result1;


//exo12
var numberStudent = parseInt(prompt('Combien d\'élèves dans votre classe ?'));
var noteStudent = [];

outputExo12 = 'Exo12 = '


for(var e = 0 ; e < numberStudent ; e++)
{
   var note = parseInt(prompt('notes des élèves ?')) + numberStudent;

    noteStudent[e] = note;
}

for(var n = 0 ; n < noteStudent.lenght ; n++)
{
    outputExo12 = outputExo12 + (n +1)  + noteStudent[n];
    console.log;
}


document.getElementById('outputExo12').textContent = outputExo12 ;



//exo13
var numberStudent2 = parseInt(prompt('Combien d\'élèves dans votre classe ?'));
var moyenne=0;
var noteGlobal = [];

for(var e = 0 ; e < numberStudent2 ; e++)
{
   var noteSeul = parseInt(prompt('notes des élèves ?')) + numberStudent2;

    noteGlobal[e] = noteSeul;
}


for ( noteSeul of noteGlobal )
{
    if (noteSeul >= 5)
    moyenne++;
}
outputExo13 = 'Nombre d\'élèves ayant la moyenne : ' + moyenne ;
document.getElementById('outputExo13').textContent = outputExo13 ;


//exo14

function somme(chiffres)
{
    let result = 0;
    for(let chiffre of chiffres)
    {
        result += chiffre
    }
    return result;
}

function moyenne(chiffres)
{
    let result = somme(chiffres) / chiffres.length ;
    return result ;
}

let array =[1,2,3,4,5];

let outputExo14 = 'Exo14 : ' + somme(array) ;

document.getElementById('outputExo14').textContent = outputExo14 ;



let outputExo15 = 'Exo15 : ' + moyenne(array);

document.getElementById('outputExo15').textContent = outputExo15 ;
*/
//Exo16
/*
function tableau(chiffres)
{
    let tableau= null;
    for (let chiffre of chiffres)
    {
        if(tableau== null || chiffre > tableau)
        {
            tableau = chiffre;
        }
    }
    return tableau
}

let array = [11,2,33,42,58,6,77,85,29];
let outputExo16 = 'Exo16 : ' + tableau(array);
document.getElementById('outputExo16').textContent = outputExo16 ;

*/
//exo17

function compare(numberOne,numberTwo)
{
    let nul = 1;
    if (numberOne > numberTwo)
    {
        return numberOne ;
    }
    else
    {
        return nul;
    }
}

let outputExo17 = 'Exo17 : ' + compare(8 , 22);
document.getElementById('outputExo17').textContent = outputExo17;







