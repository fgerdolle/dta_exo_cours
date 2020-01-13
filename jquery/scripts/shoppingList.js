$(function() {

    let list = $('ul');

    $('button').click(function() {

        let myItem = $('input').val();        
        
        
        let listItem = $('<li></li>');
        

        let listText = $('<span></span>');
        
        listText.text(myItem);

        
        let listBtn = $('<button>Delete</button>');
        
        listBtn.click(function(e) {

            listItem.remove();
        });
        

        listText.appendTo(listItem);        

        listBtn.appendTo(listItem);
        

        listItem.appendTo(list);
        

        $('input').val('');
        
        $('input').focus();
    });
});