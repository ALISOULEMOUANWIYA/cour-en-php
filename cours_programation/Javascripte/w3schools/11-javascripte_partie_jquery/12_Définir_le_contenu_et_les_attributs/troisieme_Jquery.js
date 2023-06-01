$(document).ready(function() {
    //
    $("#btn1").click(function() {
        $("#test1").text("Hello");
    });
    $("#btn2").click(function() {
        $("#test2").html("<b>Hello world!</b>");
    });
    $("#btn3").click(function() {
        $("#test3").val("Dolly duck");
    });
    $("#btn4").click(function() {
        $("#test4").text(function(i, origText) {
            return ("Old text: " + origText + "New text : Hello world! (index: " + i + ")");
        });
    });
    $("#btn5").click(function() {
        $("#test5").html(function(i, origText) {
            return ("Old html: " + origText + "New text : Hello world! (index: " + i + ")");
        });
    });
    $("#btn6").click(function() {
        $("#w3s").attr("href", "https://www.w3schools.com/jquery/")
    });
    $("#btn7").click(function() {
        $("#w3s2").attr({
            "href": "https://www.w3schools.com/jquery/",
            "title": "W3Schools jQuery Tutorial"
        });
    });
    $("#btn8").click(function() {
        $("#w3s3").attr("href", function(i, origValue) {
            return (origValue + "/jquery/");
        });
    });
});