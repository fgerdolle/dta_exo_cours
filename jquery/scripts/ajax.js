$(function() {
    
    
    $("#action").click(function() {
                        
        /* Exemple avec load 
        
        let param = "l=" + $("#ref").val();
        
        $("#r").load("http://localhost/ajax/proverbes.php", param);
        */
        
        
        /* Exemple avec get 
        
        let param = "l=" + $("#ref").val();
        
        let url = "http://localhost:8080/ajax/proverbes.php?" + param;
        
        $.get(url, function(content) {
            
            $("#r").html(content);
        });
        */
        
        
        /* Exemple avec post         
                
        let url = "http://localhost:8080/ajax/proverbes.php";
        
        $.post(
            url, 
               
            { l: $("#ref").val() },
               
            function(content) {
            
                $("#r").html(content);
            }
        );
        */
        
               
        let param = "l=" + $("#ref").val();
        
        let url = "http://localhost:8080/ajax/proverbes.php?" + param;
        
        $.ajax({
            type: "GET",
            
            url: url,
            
            timeout: 3000,
            
            success: function(content) {
                $("#r").html(content);
            },
            
            error: function() {
                $("#r").html("La requête n\'a pas abouti");
            }
        });        
        
    });
});