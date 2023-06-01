// "use strict";
$(document).ready(function() {
    const listeFacture = document.querySelector(".table .tableauListe");

    const dateF = document.querySelector(".dates"),
        listeEtat = document.querySelector(".listeEtat");

    const soumettre = document.querySelector(".ajouterF"),
        annuler = document.querySelector(".annulerF");
    var actionPanel = 0,
        actionTable = 0;

    setTimeout(listeRelementFait, 1000);

    function listeRelementFait() {
        // introduction d'ajax
        let xhr = new XMLHttpRequest(); // creation d'objet XML 
        xhr.open("GET", "./model/scripte_PHP/listeReglement.php", true);
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

    setTimeout(listeEtatReglement, 1000);

    function listeEtatReglement() {
        let xhr2 = new XMLHttpRequest(); // creation d'objet XML 
        xhr2.open("GET", "./model/scripte_PHP/listeReglementEtat.php", true);
        xhr2.onload = () => {
            if (xhr2.readyState === XMLHttpRequest.DONE) {
                if (xhr2.status === 200) {
                    let data = xhr2.response;
                    listeEtat.innerHTML = data;
                }
            }
        };
        xhr2.send();
    }
    $(".annulerF").click(function() {
        setTimeout(Effacer, 1000);

        function Effacer() {
            dateF.value = "";
            listeEtat.value = "";
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
                            $(".infoProgessionF").prepend("<h4 class='afficheInfoF'><i class='fa fa-chevron-up' style='font-size:24px;color:red'></i> Formulaire de gestion des reglement</h4>");
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
                    xhr.open("GET", "./model/scripte_PHP/addReglement.php?datesF=" + dateF.value +
                        "&IdF=" +
                        listeEtat.value, true);
                    xhr.onload = () => {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                console.log(xhr.response);
                                AnjouterF = xhr.response;
                                dateF.value = "";
                                listeEtat.value = "";
                                setTimeout(listeRelementFait, 1000);
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
                            $(".listeFacture").prepend("<h4 class='afficheInfo'><i class='fas fa-chevron-up' style='font-size:24px;color:red'></i> Liste des factures</h4> ");
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
        if (dateF.value != "" && listeEtat.value != "") {
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