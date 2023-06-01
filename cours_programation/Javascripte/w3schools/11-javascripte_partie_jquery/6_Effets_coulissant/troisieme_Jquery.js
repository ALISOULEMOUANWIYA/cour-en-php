$(document).ready(function() {
    let verification = 0;
    $("#slider").click(function() {
        if (verification == 0) {
            $("#panel").slideDown("slow");
            verification = 1
        } else {
            $("#panel").slideUp("slow");
            verification = 0;
        }
    });
});