$(function() {
    
    $("#menu").menu();

    $("#accordeon").accordion();

    
    $("#datepicker").datepicker({
        dateFormat: "D, d M yy"
    });
    
    
    $("#dialog").dialog({ 
        autoOpen: false 
    });
    
    $("#opener").click(function() {
        $("#dialog").dialog("open");
    });
});