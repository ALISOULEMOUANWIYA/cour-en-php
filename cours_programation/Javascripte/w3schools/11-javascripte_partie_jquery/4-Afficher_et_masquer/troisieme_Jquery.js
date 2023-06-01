$(document).ready(function() {
    var verificateur = 0;
    $("#changeColorFond1").click(function() {
        if (verificateur == 0) {
            $("#premiere").css("background-color", "lightgray");
            verificateur = 1
        } else {
            $("#premiere").css("background-color", "blue");
            verificateur = 0
        }
    });
    $("#changeColorFond2").click(function() {
        $("#deuxieme").css("background-color", "yellow");
    });
    $("#toggole").click(function() {
        $("p").toggle();
    });
});