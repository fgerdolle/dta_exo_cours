
var list = document.querySelector('ul');
var input = document.querySelector('input');
var button  = document.querySelector('button');

button.onclick = function ()
{
    var myItem = input.value;
    var listItem = document.createElement('li');
    listItem.textContent = myItem;

    var removeItem = document.createElement("button");
    removeItem.textContent = 'Remove';
    listItem.appendChild(removeItem);
    removeItem.onclick = function()
    {
        list.removeChild(listItem);
    }

   
    list.appendChild(listItem); // je rajoute li en infant a mon parent UL
    input.value = '';
    input.focus();
}

input.onkeypress = function(e)
{
    if (e.keyCode == 13)
    {
        button.onclick();
    }
}