$(function() {
    //$ permet d'aller attraper des element CSS et les modifier sans passer par le CSS

    $("ul.rouge li.pair").css("background-color", "#d1483e");
    
    $("ul.rouge li.impair").css("background-color", "#8c1007");

    
    $("ul.bleu li.pair").css("background-color", "#15b2a2");
    
    $("ul.bleu li.impair").css("background-color", "#2d4eaf");    
    
    
    $("ol li:nth-child(2)").addClass("vert");
    
    
    $("ol li").each(function(index) {
                            // $(this)  on renforce le this qui contint le li du dom (html) pour lui permettre d'appliquer la fonction text()
        let textContent = $(this).text();
        
        $(this).text(textContent.toUpperCase());
    });
    // Si on met cette portion de code au debut, tout sera prit en compte, ya un syteme de priorite
                                                     // appendTo  rajoute a la fin de la liste
    $("<li class=\"pair\">Quatrième élément de la liste rouge</li>").appendTo($("ul.rouge"));
                                                    // prependTo ajoute au debut de liste
    $("<li>Elément 0 de la liste numérotée</li>").prependTo($("ol"));
    
});