$(document).ready(function() {
    let verification = 0;
    $("button").click(function() {
        if (verification == 0) {
            $("p").hide("slow", function() {
                alert("Le paragraphe est cacher");
                verification = 1;
            });
        } else {
            $("p").hide(1000);
            alert("Le paragraphe est cacher");
            verification = 0;
        }
    });
});