 /*Exo 1
function power(x, n) {
    if (n == 0) {
        return 1;
    }
    else {
        return x * power(x, n - 1);  // voir photo tableau sur telephone pour expliquer comment sa marche.
    }
}
let msg = power(5, 4);
document.getElementById("result1").innerHTML = msg;
/*

/* Exo 2
function makeCounter() {  //photo sur telephone pour explication closure
    
    let count = 0;
    
    return function() {  // une fonction dans une fonction sont souvent la marque d'une closure
        
        count = count + 1;
        
        return count;
    }
}
let c1 = makeCounter();
let c2 = makeCounter();
let msg = "";
msg += "c1 : " + c1();
msg += "<br>";
msg += "c1 : " + c1();
msg += "<br>";
msg += "c1 : " + c1();
msg += "<br>";
msg += "c2 : " + c2();
msg += "<br>";
msg += "c2 : " + c2();
document.getElementById("result1").innerHTML = msg;
*/

/* Exo 3
(function() {    //les fonction auto appeler sont des cellule isolé qui ne prenne pas compte de ce qui les entoure et n'agisse que avec ce qui est à l'interieur.
   
    let u1 = {
        name: "Thibaut",
        age: 23
    };
    
    let u2 = {
        name: "Franck",
        age: 30
    };
    
    let msg = "";
    msg += u1.name + " a " + u1.age;
    msg += "<br>";
    
    msg += u2.name + " a " + u2.age;
    document.getElementById("result1").innerHTML = msg;
})();
(function() {
   
    let u1 = {
        name: "Vieux Thibaut",
        age: 45
    };
    
    let u2 = {
        name: "Vieux Franck",
        age: 55
    };
    
    let msg = "";
    msg += u1.name + " a " + u1.age;  // += c'est de la concatenation  c'est quivalent  à msg  = msg + "br"
    msg += "<br>";
    
    msg += u2.name + " a " + u2.age;
    document.getElementById("result2").innerHTML = msg;
})();
*/

/* Exo 4
let multiply = (param1, param2) => param1 * param2;  // =>  le raccourci d'une function c'est la fat arrow.  en function classic sa donnerais  function (param1 , param2){result = param1*param2 return result}
document.getElementById("result1").innerHTML = multiply(12, 24);

//let greater   prendra 2 parametre cette variable renverras le plus grand des parametre

let greater = (param1,param2) => {
    if (param1 > param2) {
        return param1;
    }
    else {
        return param2;
    }
};

document.getElementById("result1").innerHTML = greater(5,69);
document.getElementById("result2").innerHTML = greater(12,14);



let u1 = {
    firstName: "Vieux Thibaut",
    age: 45,
    sayHi : function(){
        return 'Hi I am ' + this.firstName;
    }
};

document.getElementById('result1').innerHTML = u1.sayHi();

let u2 = {
    firstName: "Vieux Franck",
    age: 55,
    sayHi : () =>{
        return 'Hi I am ' + this.firstName; // la fat arrow ce comporte differament de la function normal pour le this. donc cela ne fonctionne pas si on utilise un this avec une fat arrow
    }
};

document.getElementById('result2').innerHTML = u2.sayHi();

/* Exo 5 
function User(name, age) {
    
    this.name = name;
    
    this.age = age;    
}

let user1 = new User("John", 25);
let user2 = new User("Kate", 32);
let sayHi = function(prefix, suffix) {
  
    return prefix + this.name + " a " + this.age + " ans." + suffix;
};
/*
document.getElementById("result1").innerHTML = sayHi.apply(user1, ["((", "))"]);
document.getElementById("result2").innerHTML = sayHi.call(user2, "[[", "]]");  // le this c'est le context dans lequel on appel la fonction soit il est reference dans l'objet dans lequel on est entrain de parametrer/manipuler  dans tout les autre cas, le this on peu choisir ce qu'on met dedans avec le call ou le apply par exemple 

// bien ce poser la question : qu'est ce que j'ai dans le this ?


let user1SayHi = sayHi.bind(user1);
let user2SayHi = sayHi.bind(user2);
document.getElementById("result1").innerHTML = user1SayHi("((", "))");
document.getElementById("result2").innerHTML = user2SayHi("[[", "]]");


/* Exo 6 
let userAsString = "{ \"firstName\" : \"Thibaut\", \"age\" : 23 }";
let userAsObject = JSON.parse(userAsString);
document.getElementById("result1").innerHTML = userAsObject.firstName + " a " + userAsObject.age + " ans.";
userAsObject.ville = "Une Foret touffu et sauvage avec plein de pommier";
let userAsStringAfterModification = JSON.stringify(userAsObject);
document.getElementById("result2").innerHTML = userAsStringAfterModification;


/* Exo 7
function User(name, age , gender) { // majuscule = constructeur
    
    this.name = name;
    
    this.age = age;   
    
    this.gender = gender;
}
let user1 = new User("Thibaut", 25 , "Elf");
let user2 = new User("Thibaul", 32 , "Elf");
let user3 = new User("Thibault", 43 , "fils de lulu");
let users = [
    user1,
    user2,
    user3
];


let youngUsers = users.filter(item => item.age < 35);
document.getElementById("result1").innerHTML = "Nb éléments trouvés : " + youngUsers.length;
youngUsers.forEach(
    youngUser => {
        msg += "Elément trouvé : " + youngUser.name + "(" + youngUser.age + ")" + "<br>";
    }
);


let msg = "";
let genderUsers = users.filter(item => item.gender == "Elf");
genderUsers.forEach(
    genderUsers => {
        msg += "Elément trouvé : " + genderUsers.name + "(" + genderUsers.gender + ")" + "<br>"
    }
);
document.getElementById("result1").innerHTML = "Nb éléments trouvés : " + genderUsers.length;

document.getElementById("result2").innerHTML = msg;


/* Exo 8 
let array = ["str1", "str2", 100];
let [var1, var2, var3] = array;  // permet d'affecté plusieur variable d'un coup = assignement destructurer.  Et leur assigner les valeur du tableau a chaque variable var1 = "str1" , var2 = "str2" , ect
let msg = "";
msg += "var1 : " + var1 + "<br>";
msg += "var2 : " + var2 + "<br>";
msg += "var3 : " + var3 + "<br>";
document.getElementById("result1").innerHTML = msg;


//super important
let obj = {
    espagnol: "Buenos dias",
    anglais: "Good morning",
    francais: "Salut"
};
function displayVars({francais = "Coucou",   // on a passer un objet en parametre et souvent cela veut dire que c'est un assignement destructurer par objet.
                      anglais = "Hello", 
                      espagnol = "Hola",
                      italien = "Ciao"}) {
    
    let msg = "";
    msg += "francais : " + francais + "<br>";
    msg += "anglais : " + anglais + "<br>";
    msg += "espagnol : " + espagnol + "<br>";
    msg += "italien : " + italien + "<br>";
    document.getElementById("result2").innerHTML = msg;
}
displayVars(obj); // utilise le let obj pour edité le parametre de la function displayVars. ainsi je modifie le parametre de espagnol et anglais sans touché au autre parametre.




let user = {
    name : "Thibaut",
    surname : "L'Elf_Roux",
    job : "Ramasseur_de_pomme",

    get fullName(){
        return `${this.name} ${this.surname} ${this.job}`; //tres important les ${} cela permet de dire au Thos d'aller chercher les prametre de l'objet dans la variable let user
    }, // ATTENTION utiliser cote oblique altgr + 7  ` 

    set fullName(value){
        [this.name , this.surname , this.job] = value.split (" "); //avec la value.split  permet de separer name et surname  ainsi quand je vais appeler user.fullname  il m'affichera Thibaut L'Elf Roux
    }
};

user.fullName = "Thibaut L'Elf_Roux Ramasseur_de_pomme";

alert(user.name);
alert(user.surname);
alert(user.job);
alert(user.fullName);
alert(user.name + " " + user.surname + " " + user.job);



class User {  // la classe c'est un template 

    constructor(name){
        this.name = name;
    }

    sayHi(){
        alert(this.name);
    }
}

let user = new User("Thibaut");
user.sayHi();

/* Exo 9
class Student {

    constructor(firstName, fatherLastName, motherLastName) {

        this.firstName = firstName;
        this.fatherLastName = fatherLastName;
        this.motherLastName = motherLastName;
    }
    /*
    get fullName() {
        
        return  this.firstName + " - " + this.fatherLastName + " - " + this.motherLastName;
    }
    

    sayHi(){
        return  this.firstName + " - " + this.fatherLastName + " - " + this.motherLastName;

    }
}
let nino = new Student("Thibaut", "MorningStar", "Gerin");

document.getElementById("result1").innerHTML = nino.firstName + " " + nino.motherLastName;
document.getElementById("result2").innerHTML = "Nom complet : " + nino.sayHi();

let nina = new Student("Franck" , "Gerdolle" , "Nepote-Cit");

document.getElementById("result3").innerHTML = nina.firstName + " " + nina.fatherLastName;
document.getElementById("result4").innerHTML = "Nom complet : " + nina.sayHi();
*/

class Animal {

    constructor(name){
        this.speed = 0;
        this.name = "name";
    }

    run(speed){
        this.speed += speed; // += veut dire qu'on va ajouter la valeur speed  à la proprieté speed
        alert(`$(this.name) runs with speed $(this.speed).`);
    }

    stop(){
        this.speed = 0;
        alert(`$(this.name) Stopped.`);
    }
}

class Rabbit extends Animal {

    hide(){
        alert(`$(this.name) hides`);
    }
}