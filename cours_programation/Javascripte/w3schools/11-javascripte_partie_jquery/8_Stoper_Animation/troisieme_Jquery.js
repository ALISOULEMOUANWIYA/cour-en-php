$(document).ready(function() {
    let verification = 0;
    $("#flip").click(function() {
        $("#panel").slideDown(5000);
    });
    $("#stop").click(function() {
        $("#panel").stop();
    });
});