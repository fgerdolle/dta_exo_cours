/*
var link = document.querySelector('a');
link.textContent = 'Mozilla Developer Network';
link.href= "https://developer.mozilla.org";

link.onclick = function(e)
{
    alert('Vous avez cliqué sur un lien que vous n\' irez jamais. BWAHAHAHA');
    e.preventDefault(); // l'element e signifie evenement, et preventdefault empeche l'evenement par default
}

var sect = document.querySelector('section');
var para = document.createElement('p');
para.textContent = 'We hope you enjoyed the ride.';
para.setAttribute('class','highlight');

sect.appendChild(para);

var text = document.createTextNode('-- the premier source for the web developement knowledge.');

var linkPara = document.querySelector('p');
linkPara.appendChild(text);

sect.appendChild(linkPara);
*/

/*

let divDamier = document.getElementById('damier');
for (var i = 1; i <= 16 ; i++)
{
    var myDiv = document.createElement('div');
    myDiv.className = 'elementDuDamier';
    divDamier.appendChild(myDiv); 
}

function randomNumber(number)
{
    return Math.floor(Math.random()*number);
}

function randomColor()
{
    var rndColor = 'rgb(' + randomNumber(255) + ',' + randomNumber(255) + ',' + randomNumber(255) + ')'; 
    return rndColor;
}
/*
var divs = document.getElementsByClassName("elementDuDamier");
for ( var i = 0 ; i < divs.length; i++)
{
    divs[i].onclick = function(e)
    {
        e.target.style.backgroundColor = randomColor();
    }
}


function startRandomColor()
{
    divDamier.onclick = function(e)
    {
        e.target.style.backgroundColor = randomColor();
    }

}

let startButton = document.getElementById('start');

startButton.addEventListener('click',startRandomColor);


function stopRandomColor()
{
    divDamier.onclick = '';
}

let stopButton = document.getElementById('stop');

stopButton.addEventListener('click',stopRandomColor);
*/





