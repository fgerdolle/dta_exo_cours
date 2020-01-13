$(function() {
    $("#action").click(function() {


        let param = "l=" + $("#ref").val();
        
        let url = "http://127.0.0.1/projetweb/PROJETAJAX/pictures/img.php?" + param;
        /* AJAX*/
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