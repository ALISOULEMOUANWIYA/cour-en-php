$(document).ready(function() {
    $("#masquer1").click(function() { // une fois cliquer 
        $("#premiere").hide(); // masquer
    });

    $("#masquer2").dblclick(function() { // apres double clique
        $("p").hide(); // masquer
        $("#masquer1").hide(); // masquer
    });

    $("#premiere").mouseenter(function() { // une entrez dans cette element
        alert("vous etez sur le paragraphe 1"); // pope d'alerte
    });

    $("#deuxieme").mouseleave(function() { // une fois sortis sur cette element
        alert("vous etez sur le paragraphe 2"); // pope d'alerte
    });

    // une fois une clique sur cette element:
    // par une des bouttons de la souris du clavier enffoncé
    $("h2").mousedown(function() {
        alert("vous etez sur l'entate de h2"); // pope d'alerte
    });


    // La fonction est exécutée, lorsque le bouton gauche, central ou droit de la
    // souris est relâché, alors que la souris est sur l'élément HTML
    $("#masquer3").mouseup(function() {
        $("h2").hide(); // masquer
    });
});

$(document).ready(function() {
    $("h3").hover(function() {
        alert("vous entrez sur h3");
    }, function() {
        alert("Au revoir! Vous quittez maintenant h3");
    });
});

$(document).ready(function() {
    $("input").focus(function() {
        $(this).css("background-color", "yellow");
    });
    $("input").blur(function() {
        $(this).css("background-color", "green");
    });
});
$(document).ready(function() {
    $("p").on({
        mouseenter: function() {
            $(this).css("background-color", "lightgray");
        },
        mouseleave: function() {
            $(this).css("background-color", "lightblue");
        },
        click: function() {
            $(this).css("background-color", "yellow");
        }
    });
});