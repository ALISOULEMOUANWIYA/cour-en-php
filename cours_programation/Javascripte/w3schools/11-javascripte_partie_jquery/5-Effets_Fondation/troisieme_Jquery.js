$(document).ready(function() {
    let verificateur = 0;
    $("#btn1").click(function() {
        console.log(verificateur);
        if (verificateur == 0) {
            document.querySelector("#btn1").innerHTML = "fadeOut()";
            $("#par").hide();
            $("#btn2").hide();
            $("#div1").toggle();
            $("#div2").toggle("slow");
            $("#div3").toggle(3000);
            verificateur = 1;
        } else {
            document.querySelector("#btn1").innerHTML = "toggle()";
            $("#par").show();
            $("#btn2").show();
            $("#div1").fadeOut();
            $("#div2").fadeOut("slow");
            $("#div3").fadeOut(3000);
            verificateur = 0;
        }
    });
    $("#btn2").click(function() {
        console.log(verificateur);
        if (verificateur == 0) {
            document.querySelector("#btn2").innerHTML = "fadeOut()";
            $("#par").show();
            $("#div1").fadeIn();
            $("#div2").fadeIn("slow");
            $("#div3").fadeIn(3000);
            verificateur = 1;
        } else {
            document.querySelector("#btn2").innerHTML = "fadeInt()";
            $("#par").show();
            $("#div1").fadeOut();
            $("#div2").fadeOut("slow");
            $("#div3").fadeOut(3000);
            verificateur = 0;
        }
    });
    $("#btn3").click(function() {
        $("#div1").fadeTo("slow", 0.15);
        $("#div2").fadeTo("slow", 0.4);
        $("#div3").fadeTo("slow", 0.7);
    });
});