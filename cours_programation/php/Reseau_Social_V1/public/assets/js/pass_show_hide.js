"use strict";
$(document).ready(function () {
    $(".form .eye i").click(function () {

        if ($(".form .champs7").prop('type') == "text") {
            $(".form .champs7").attr("type", 'password');;
            $(".form .eye i']").css("#333");
            $(".form .eye i").removeClass("fa-eye-slash");
            $(".form .eye i").addClass("fa-eye");
            console.log("Click 1");
        } else {
            $(".form .champs7").attr("type", 'text');
            $(".form .eye i").css("#333");
            $(".form .eye i").removeClass("fa-eye");
            $(".form .eye i").addClass("fa-eye-slash");
            console.log("Click 2");
        }
    });
});