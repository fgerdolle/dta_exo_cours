/*
var open = document.getElementById('open');
    var close = document.getElementById('close');
    var modal = document.getElementById('modal');

    modal.style.display = 'none';

    open.onclick = function()
    {
        modal.style.display = 'block';
    }

    close.onclick = function()
    {
        modal.style.display = 'none';
    }
 */
/*
let myVar = 'Hello' ;

document.getElementById('result').textContent = myVar + ' World';

*/
//le let est très utile declarer en global et perd son interet dans les bloc.
// les var utile quand on la déclare dans un bloc.

/*
let myVar = 'Hello';

if(true)
{

document.getElementById('result').textContent = myVar + ' World';
}
*/
/*
function defineVar()
{
    let myVar = ' Hello';
}



document.getElementById('result').textContent = defineVar() + ' World';

*/
/*
var myVar = 'hello';

function changeVar()
{
    myVar = 'bonjour';
}

changeVar();
document.getElementById('result').textContent = myVar + ' World';
*/

// || = ou   et il prendra la 1er valeur vrai qu'il auras trouver. ou  tout ce qui est faux si on donne que des valeur false.

// && = et    il prendra que les valeur fausse

// ! = not   force a faire une convertion boleen  0 = false   tout le reste = true.

/*
let a = 'blabla';
let b = 40;
let c = 0;
let d = '';


let msg = a || b || c || d;

let msg2 = a && b && c && d ;

document.getElementById('result').textContent = msg;

// || (ou)  prend le 1er qui est vrai  et && (et)  prend le 1er qui est faux. si les deux sont faux ou vrai il prend le dernier faux ou dernier vrai.
*/
/*
let reponse = prompt('Entrer un nombre entre 1 et 5');

switch(reponse)
{
    case '1':
    document.getElementById('result').textContent = 'vous avez rentré 1 ';
    break;

    case '2':
    document.getElementById('result').textContent = 'vous avez rentré 2';
    break;

    case '3':
    document.getElementById('result').textContent = 'vous avez rentré 3';
    break;

    default :
    document.getElementById('result').textContent = 'vous avais rien bité';
    break;
}
*/
/*
let array = [11,22,33,44,55];
let index = array.length -1 ; // index est notre conteur de tableau  lnght -1 = ce mettre au derier element du tableau

while (index >=0) 
{
    console.log(array[index]); // je demande a affiché la valeur de mon conteur de mon tableau .

    index--; // je lui dit ensuite de faire -1. 
}
*/
/*
let sum = 0 ;

while (true)
{
    let value =  + prompt('Entrer a number','');
    if (!value) break;

    sum += value; 
}

alert( 'sum ' + sum);

% = modulo = le reste de la division 
 value % 2 == 0 = prendre la somme des chiffres paire 
 value % 2 == 1 = prendre la somme des chiffres impaire 
*/
/*
function displayDouble (param)
{
    alert(computeDouble (param));
     
}

function computeDouble (param)
{
    return param*2;
}

let nb= 10;

displayDouble(nb);

let doubleNb = conputeDouble(nb);

alert(doubleNB);
*/

/*
funtion sayHi()
{
    alert('Hi!');
}

// autre façon d'écrire

let sayHi = function()
{
    alert('Hi!');
}

sayHi();


let response= confirm('Est ce que ca va ?');

alert(response);


let ok = function()
{
    alert('OK!');
}

let cancel= function()
{
    alert('Cancel');
}

let ask= function (question,yes,no) // on appelle les function appelé dans des function qui s'active que si on en a besoin, s'apelle des function Callback.
{
    let response = confirm(question);
    if (response)
    {
        yes();
    }
    else
    {
        no();
    }
}

ask('Est ce que ca va ?',ok,cancel);


let sayHello = function ()
{
    return ('Hello');
}

let sayGoodBye = function()
{
    return ('Bye');
}

function saySomething ()
{
    let response = confirm('Voulais vous dire bonjour ?');

    if (response)
    {
        return sayHello;
    }
    else
    {
        return sayGoodBye;
    }
}

let question = saySomething();
document.getElementById('result').textContent = question();

let student1 = 
{
    firstName : 'Thibaut',
    lastName : 'Le sans-âme',
    age : 30,
    sayHello : function()
    {
        alert('hello je suis ' + this.firstName);
    }
};

let student2 = 
{
    firstName : 'Thibaut',
    lastName : 'elf roux',
    age : 40,
    direBonjour : function()
    {
        alert('Bonjour je suis ' + this.firstName);
    }
};
/*
let result = 'Les élèves sont : ' + student1.firstName +' '+ student1.lastName + ' et ' + student2.firstName+ ' ' + student2.lastName;
document.getElementById('result').textContent = result;


student1.hobbys=[ 'dessin' ,'BD']; // on rajoute une proprieté d'objet
student2.hobbys=['Chansons', 'films'];

alert(student2.hobbys[1]);

student2.firstName = 'Marie'; // je change une proprieté d'objet

alert(student2.firstName);


function idStudent(student)
{
    alert(student.firstName + ' ' + student.lastName + ' ' + student.age);
}

idStudent(student1);
idStudent(student2);

function rename(student,newLastName)
{
    student.lastName = newLastName;
}
rename(student1, 'Dumoulin');

idStudent(student1);



function createStudent(firstName,lastName,age)
{
    let student = 
    {
        firstName : firstName,
        lastName : lastName,
        age : age
    };
    return student;
}

let student3 = createStudent('Franck','Gerdolle', '30');

idStudent(student3);



for (let key in student1)
{
    alert(key + ' : ' + student1[key]);
}


student1.sayHello();
student2.direBonjour();

function sayHi ()
{
    alert(this.name);
}

sayHi();

function Student(firstName,lastName,age)
{
  
    this.firstName = firstName;
    this.lastName = lastName;
    this.age = age;
    this.sayHi = function()
{
    alert('My Name is ' + this.firstName);
};
}

let student1 = new Student("Thibaut", "Elf Roux",23);
let student2 = new Student("Thibaut", "Sans-âme",23);
let student3 = new Student("Thibaut", "Fils de Lulu",23);


alert(student1.firstName);
alert(student2.firstName);
alert(student3.firstName);



student1.sayHi();


function Menu(entrée,plat,dessert)
{
    this.entrée = entrée;
    this.plat = plat;
    this.dessert=dessert;
    this.affiche = function()
    {
        return(this.entrée+' * '+ this.plat + ' * ' + this.dessert);
    }
};

let menu1 = new Menu('Salade de crevette', ' Choucroute' , ' Pana Cota  au Caramel');
let menu2 = new Menu('Soupe maison' , ' Quiche Lorraine',' Fondant Chocolat');
let menu3 = new Menu ('Raviole au maroille', ' Burger maison + frite' , ' Tarte Mirabelle');

document.getElementById('result').textContent = menu1.affiche() + ' * ' +  menu2.affiche();


let phrase = 'Thibaut est une salope elf roux bouffeur de salade';
let maj = phrase.toUpperCase();

alert(maj);

let words = maj.split(' '); // split permet d'éclater une phrase et de mettre les morceau dans un tableau
let result = [];

for (let word of words) // on va iterer dans le tableau words, mot par mot, colonne par colonne.
{
    if (word.indexOf('A') != -1)// cherche les A dans la phrse du tableau et renvoi la position dans le tableau. et renvoi -1
    {
        result.push(word);// je pousse ensuite dans mon tableau les mots qui comporte un A
    }
}

let newResult = ' ';

for (let word of result)
{
    newResult += word + ' ';
}

document.getElementById('result').textContent = result;



// sur git.hub  =  DTA basic JS

let map1 = new Map();

let map2 = new Map();
map2.set('joueur1','Thibaut Le Roux');
map2.set('joueur2','Thibaut Elf');

let map3 = new Map();
map3.set('joueur1','Thibaut Sans L');
map3.set('joueur2','Thibaut Fils de Lulu');

map1.set('Elf des enfers',map2);
map1.set('Mangeur de Salade', map3);

document.getElementById('result').textContent = map1.get('Elf des enfers').get('joueur1')+ ' VS ' + map1.get('Mangeur de Salade').get('joueur2');


*/

function createPlayer(team,name)
{
    let player = 
    {
        team: team,
        name : name,
      
    };
    return player;
}
let player1 = createPlayer('Elf des Bois' , 'Thibaut Gerin');
let player2 = createPlayer('Haut Elf', ' Thibaut Fils de Lulu');
let player3 = createPlayer('Haut Elf','Thibaut Elf Roux');
let player4 = createPlayer('Elf Noir', 'Thibaut SaladEater ');
let player5 = createPlayer('Elf des Bois' , 'Thibaut Fan de Lapin ');
let player6 = createPlayer('Elf des Bois' , 'Thibaut Buveur de Café');
let player7 = createPlayer('Elf Noir','Thibaut Le Sans-Ame ');
let player8 = createPlayer('Haut Elf' ,'Thibaut PUTE ');
let player9 = createPlayer('Elf des Bois','Thibaut Lagerfeld');
let player10 = createPlayer('Elf Noir' ,'Thibaut Le Dessinateur ');


let array= [];
array.push(player1);
array.push(player2);
array.push(player3);
array.push(player4);
array.push(player5);
array.push(player6);
array.push(player7);
array.push(player8);
array.push(player9);
array.push(player10);

function buildPlayersMapByTeam(player)
{
    let result = new Map();
    for (let joueur of player)
    {
        let team = joueur.team;
        let playersForTeam = result.get(team);

        if (!playersForTeam)
        {
            playersForTeam = [];
            playersForTeam.push(joueur);
            result.set(team,playersForTeam);
        }
        else
        {
            playersForTeam.push(joueur);
        }
    }
    return result;
}

let result = ' ';
let map = buildPlayersMapByTeam(array);


for (let team of map.keys())
{
    result += '<h2>' + team + '</h2>';

    result += '<ul>';

    for (let joueur of map.get(team))
    {
        result += '<li>' + joueur.name + '</li>';
    }
    result += '</ul>'
}


document.getElementById('result').innerHTML = result;

