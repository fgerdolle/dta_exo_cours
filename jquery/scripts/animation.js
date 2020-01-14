$(function() { // bien penser a dire que la function demarrerera au moment ready du dom

    $("#affiche").click(function() {
        
        // $("tr:even").show();
        
        //$("tr:even").show("slow");
        
         $("tr:even").fadeIn("slow");
    }); 
    
    $("#cache").click(function() {
        
         //$("tr:even").hide();
        
        //$("tr:even").hide("slow");
        
         $("tr:even").fadeOut("slow");
    });
});