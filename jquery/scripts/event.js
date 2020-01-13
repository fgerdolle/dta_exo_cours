$(function() {
   
    let largeur = ($(window).width()) - 200;
    
    let hauteur = ($(window).height()) - 200;
    
    let p = $("#target").offset();
    p.top = 200;
    p.left = 200;
    
    $("#target").offset(p);
    
    function deplacerImage() {
        
        let x = Math.floor(Math.random()*largeur);
        
        let y = Math.floor(Math.random()*hauteur);
        
        let p = $("#target").offset();
        p.top = y;
        p.left = x;
        
        $("#target").offset(p);
    }
    
    
    $("#target").on("click",deplacerImage);
    
    window.setInterval(
        function(){
            $("#target").click();
        },
        2000);
    

    /*
    $("#go").prop("disabled", false);
    
    $("#stop").prop("disabled", true);

    $("#go").on("click", function() {
    
        $("#target").on("click", deplacerImage);
        
        $("#go").prop("disabled", true);
    
        $("#stop").prop("disabled", false);
    });
    
    $("#stop").on("click", function() {
    
        $("#target").off("click", deplacerImage);
        
        $("#go").prop("disabled", false);
    
        $("#stop").prop("disabled", true);
    });
    */
    
});
