$(document).ready(function() {
    let verification = 0;
    $("#btn1").click(function() {
        if (verification == 0) {
            $("#panel").animate({
                left: '250px',
                opacity: "0.5",
                height: "+=150px",
                width: "+=150px"
            });
            verification = 1
        } else {
            $("#panel").animate({
                left: "0px",
                height: '-=150px',
                width: '-=150px'
            });
            verification = 0
        }
    });
    $("#btn2").click(function() {
        $("#panel").animate({
            height: "toggle"
        });
    });
    $("#btn3").click(function() {
        $("#panel").animate({
            height: "300px",
            fontSize: "1em",
            opacity: "0.4"
        }, "slow");
        $("#panel").animate({
            width: "300px",
            fontSize: "1.5em",
            opacity: "0.8"
        }, "slow");
        $("#panel").animate({
            height: "100px",
            fontSize: "1.5em",
            opacity: "0.4"
        }, "slow");
        $("#panel").animate({
            width: "100px",
            fontSize: "1em",
            opacity: "0.8"
        }, "slow");
    });
});