$(document).ready(function() {
    $("#masquer1").click(function() {
        $("#premier").hide();
    });
    $("#masquer2").click(function() {
        $("p").hide();
        $("#masquer1").hide();
    });
});