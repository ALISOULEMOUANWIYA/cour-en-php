"use strict";
$(document).ready(function () {
    const content = document.querySelector(".content");
    setTimeout(accueille, 10);

    function accueille() {
        $(".content").empty();
        // introduction d'ajax
        let xhr = new XMLHttpRequest(); // creation d'objet XML 
        xhr.open("GET", "accueille/userBord", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    $(".content").prepend(data);
                }
            }
        };
        xhr.send();
    }

    $(".Bordtableaux").click(function () {
        $(".content").empty();
        // introduction d'ajax
        let xhr = new XMLHttpRequest(); // creation d'objet XML 
        xhr.open("GET", "accueille/userBord", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    $(".content").prepend(data);
                }
            }
        };
        xhr.send();
    });


    $(".ClientBord").click(function () {
        // menuClient.children.length;
        // console.log($(".menuClient").children.length);
        $(".content").empty();
        // introduction d'ajax
        let xhr = new XMLHttpRequest();// creation d'objet XML 
        xhr.open("GET", "accueille/ClientBord", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    $(".content").prepend(data);
                }
            }
        }
        xhr.send();
    });

    $(".listeUser").click(function () {
        $(".content").empty();
        // introduction d'ajax
        let xhr = new XMLHttpRequest();// creation d'objet XML 
        xhr.open("GET", "accueille/userBord", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    $(".content").prepend(data);
                    let url = document.URL;
                    // console.log(url);
                    var strArray = url.split("/");
                    // Display array values on page
                    for (var i = 0; i < strArray.length; i++) {
                        if (strArray.length - 1 == i) {
                            // console.log(strArray[i]);
                        }
                    }

                }
            }
        }
        xhr.send();
    });



    function abonnement() {
        // introduction d'ajax
        let xhr = new XMLHttpRequest();// creation d'objet XML 
        xhr.open("GET", "accueille/abonnement", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    content.appendChild(data);
                }
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
    }

    function consommation() {
        // introduction d'ajax
        let xhr = new XMLHttpRequest();// creation d'objet XML 
        xhr.open("GET", "accueille/consommation", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    content.appendChild(data);
                }
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
    }


});