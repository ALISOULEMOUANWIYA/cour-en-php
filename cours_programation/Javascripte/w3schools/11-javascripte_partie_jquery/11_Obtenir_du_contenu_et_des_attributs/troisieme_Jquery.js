$(document).ready(function() {
    //
    $("#btn1").click(function() {
        alert("Text: " + $("#test").text());
    });
    $("#btn2").click(function() {
        alert("HTML: " + $("#test").html());
    });
    $("#btn3").click(function() {
        alert("Value: " + $("#saisie").val());
    });
    $("#btn4").click(function() {
        alert($("#w3s").attr("href"));
    });
});