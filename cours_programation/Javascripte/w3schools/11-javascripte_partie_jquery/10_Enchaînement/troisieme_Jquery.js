$(document).ready(function() {
    let verification = 0;
    $("button").click(function() {
        $("p").css("color", "red")
            .slideUp(2000)
            .slideDown(2000);
    });
}); 