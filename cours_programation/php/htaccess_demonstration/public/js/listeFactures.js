"use strict";
$(document).ready(function() {
    const dateF = document.querySelector(".dateFacture"),
        ConsommationF = document.querySelector(".ConsommationFacture"),
        prixF = document.querySelector(".prixFacture");

    const listeFacture = document.querySelector(".table .tableauListe"),
        soumettre = document.querySelector(".ajouterF"),
        annuler = document.querySelector(".annulerF");
    var actionPanel = 0,
        actionTable = 0;


    setTimeout(listeFactureFait, 1000);

    function listeFactureFait() {
        // introduction d'ajax
        let xhr = new XMLHttpRequest(); // creation d'objet XML 
        xhr.open("GET", "./model/scripte_PHP/listeFacture.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    listeFacture.innerHTML = data;
                }
            }
        };
        xhr.send();
    }

    $(".annulerF").click(function() {
        setTimeout(Effacer, 1000);

        function Effacer() {
            dateF.value = "";
            ConsommationF.value = "";
            prixF.value = "";
        }
    });

    $(".ajouterF").click(function() {
        $("#myBar").slideDown();
        $(".afficheInfoF").remove();
        $(".infoProgessionF").prepend("<h4 class='afficheInfoF'>Preparation des données</h4>");
        var i = 0;
        setTimeout(move, 1000);

        function move() {
            if (i == 0) {
                i = 1;
                var elem = document.getElementById("myBar");
                var width = 10;
                var id = setInterval(frame, 10);

                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                        $(".afficheInfoF").remove();
                        $(".infoProgessionF").prepend("<h4 class='afficheInfoF'>Donné Envoyer</h4>");

                        setTimeout(EnvoyerLesDonner, 1000);
                        setTimeout(finTraitement, 1000);

                        function finTraitement() {
                            $("#myBar").slideUp();
                            $(".afficheInfoF").remove();
                            $(".infoProgessionF").prepend("<h4 class='afficheInfoF'><i class='fa fa-chevron-up' style='font-size:24px;color:red'></i> Formulaire de gestion des factures</h4>");
                        }

                        i = 0;
                    } else {
                        width++;
                        elem.style.width = width + "%";
                        elem.innerHTML = width + "%";
                    }
                }

                function EnvoyerLesDonner() {
                    let AnjouterF = "";
                    let xhr = new XMLHttpRequest(); // creation d'objet XML  addFacture
                    xhr.open("GET", "./model/scripte_PHP/addFacture.php?datesF=" + dateF.value +
                        "&ConsommationF=" + ConsommationF.value +
                        "&prixF=" + prixF.value +
                        "&paimentF=" +
                        0, true);
                    xhr.onload = () => {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                AnjouterF = xhr.response;
                                dateF.value = "";
                                ConsommationF.value = "";
                                prixF.value = "";
                                setTimeout(listeFactureFait, 1000);
                                setTimeout(RappleFactureAjouter, 1000);
                            }
                        }
                    };
                    xhr.send();

                    function RappleFactureAjouter() {
                        $(".afficheInfo").remove();
                        $(".listeFacture").prepend("<h4 class='afficheInfo'>" + AnjouterF + "</h4>");
                        setTimeout(enleverRappel, 4000);

                        function enleverRappel() {
                            AnjouterF = "";
                            $(".afficheInfo").remove();
                            $(".listeFacture").prepend("<h4 class='afficheInfo'><i class='fas fa-chevron-up' style='font-size:24px;color:red'></i> Liste des factures</h4>");
                        }
                    }
                }
            }
        }


    });

    $(".infoProgessionF").click(function() {
        if (actionPanel == 0) {
            $(".panelForm").slideUp();
            $(".afficheInfoF .fa-chevron-up").remove();
            $(".afficheInfoF").prepend("<i class='fas fa-chevron-down' style='font-size:24px;color:red'></i>");
            actionPanel = 1;
        } else {
            $(".panelForm").slideDown();
            $(".afficheInfoF .fa-chevron-down").remove();
            $(".afficheInfoF").prepend("<i class='fas fa-chevron-up' style='font-size:24px;color:red'></i> ");
            actionPanel = 0;
        }

    });

    $(".listeFacture").click(function() {
        if (actionTable == 0) {
            $(".paneTable").slideUp();
            $(".afficheInfo .fa-chevron-up").remove();
            $(".afficheInfo").prepend("<i class='fas fa-chevron-down' style='font-size:24px;color:red'></i>");
            actionTable = 1;
        } else {
            $(".paneTable").slideDown();
            $(".afficheInfo .fa-chevron-down").remove();
            $(".afficheInfo").prepend("<i class='fas fa-chevron-up' style='font-size:24px;color:red'></i> ");
            actionTable = 0;
        }

    });
    // actualliseur suppression
    setInterval(() => {
        // soumettre.style.left = "13px"
        // annuler.style.left = "13px"
        if (dateF.value != "" && ConsommationF.value != "" && prixF.value != "") {
            $(".btnAction").slideDown();
            soumettre.classList.remove("disabled");
            annuler.classList.remove("disabled");
        } else {
            $(".btnAction").slideUp();
            soumettre.classList.remove("ajouterF");
            soumettre.classList.add("disabled");
            annuler.classList.remove("annulerF");
            annuler.classList.add("disabled");
        }
    }, 4000);

});