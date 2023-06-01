"use strict";
const form = document.querySelector(".signup form"),
    champs = form.querySelectorAll(".signup form .field input"),
    messageErreurs = form.querySelector(".error-txt");
var valeur = 0, boxValidation = 0, tableauCheckBox = [];

$(document).ready(function () {
    form.onsubmit = (e) => {
        e.preventDefault();
    }

    listeUser();
    listeReglement();
    listeVillage();
    listeRoles();

    $(".signup form .field .champs1").focus(function () {
        messageErreurs.textContent = "Ajoutez Le nom de l'utilisateur";
        messageErreurs.style.display = "block";
        messageErreurs.style.aligne = "center";
        messageErreurs.style.background = "#fff";
        messageErreurs.style.color = "#721c24";
        messageErreurs.style.border = "1px solid #008000";
    });

    $(".signup form .field .champs2").focus(function () {
        messageErreurs.textContent = "Ajoutez Le Prenom de l'utilisateur";
        messageErreurs.style.display = "block";
        messageErreurs.style.aligne = "center";
        messageErreurs.style.background = "#fff";
        messageErreurs.style.color = "#721c24";
        messageErreurs.style.border = "1px solid #008000";
    });

    $(".signup form .field .champs3").focus(function () {
        messageErreurs.textContent = "Ajoutez l'E-mail de l'utilisateur";
        messageErreurs.style.display = "block";
        messageErreurs.style.aligne = "center";
        messageErreurs.style.background = "#fff";
        messageErreurs.style.color = "#721c24";
        messageErreurs.style.border = "1px solid #008000";
    });

    $(".signup form .field .champs4").focus(function () {
        messageErreurs.textContent = "Selectionner le reglemment de l'utilisateur";
        messageErreurs.style.display = "block";
        messageErreurs.style.aligne = "center";
        messageErreurs.style.background = "#fff";
        messageErreurs.style.color = "#721c24";
        messageErreurs.style.border = "1px solid #008000";
    });

    $(".signup form .field .champs5").focus(function () {
        messageErreurs.textContent = "Selectionner le village de l'utilisateur";
        messageErreurs.style.display = "block";
        messageErreurs.style.aligne = "center";
        messageErreurs.style.background = "#fff";
        messageErreurs.style.color = "#721c24";
        messageErreurs.style.border = "1px solid #008000";
    });

    $(".signup form .field .champs6").focus(function () {
        messageErreurs.textContent = "Selectionner Le role de l'utilisateur";
        messageErreurs.style.display = "block";
        messageErreurs.style.aligne = "center";
        messageErreurs.style.background = "#fff";
        messageErreurs.style.color = "#721c24";
        messageErreurs.style.border = "1px solid #008000";
    });

    $(".signup form .field .champs7").focus(function () {
        messageErreurs.textContent = "Ajoutez Le Mot de passe de l'utilisateur";
        messageErreurs.style.display = "block";
        messageErreurs.style.aligne = "center";
        messageErreurs.style.background = "#fff";
        messageErreurs.style.color = "#721c24";
        messageErreurs.style.border = "1px solid #008000";
    });

    $('.checkboxBtn').click(function () {
        console.log("actualiserAfterClose");
        if (boxValidation == 0) {
            boxValidation = 1;
            $('.checkboxValidation').prop('checked', false);
            $(".checkboxValidation").prop("disabled", false);
        } else {
            boxValidation = 0;
            $('.checkboxValidation').prop('checked', false);
            $(".checkboxValidation").prop("disabled", true);
        }

    });

    $(".deleteSelecte").click(function () {
        for (let x of tableauCheckBox) {
            setTimeout(function () {
                SupprimerSectection(x);
            }, 1000);
            console.log(x + "<br>");
        }
        tableauCheckBox = [];
    });

    function SupprimerSectection(valeur) {

        let xhr = new XMLHttpRequest();// creation d'objet XML 
        xhr.open("GET", "accueille/supprimerRolesUser?idUser=" + valeur, true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // console.log(xhr.response);
                    setIdUser(valeur);
                    setTimeout(deleteUser, 50);
                }
            }
        }
        xhr.send();
    }

    $(".button .envoyerDonner").click(function () {
        // introduction d'ajax
        let xhr = new XMLHttpRequest();// creation d'objet XML
        xhr.open("POST", "accueille/addUser", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    if (data == "Success") {
                        setTimeout(getLasteIDUser, 50);
                    } else {
                        messageErreurs.textContent = data;
                        messageErreurs.style.display = "block";
                        messageErreurs.style.aligne = "center";
                        messageErreurs.style.background = "#ef8d9682";
                        messageErreurs.style.color = "#721c24";
                        messageErreurs.style.border = "1px solid #f5c6cb";
                        for (var i = 0; i < champs.length - 1; i++) {
                            champs[i].value = "";
                        }

                    }
                }
            }
        };
        let formData = new FormData(form);
        xhr.send(formData);
    });

    $(".actualiserbtn").click(function () {
        listeUser();
        // console.log("actualiser");
    });

    $(".actualiserAfterClose").click(function () {
        listeUser();
        // console.log("actualiserAfterClose");
    });

    function listeReglement() {
        // introduction d'ajax
        let xhr = new XMLHttpRequest();// creation d'objet XML 
        xhr.open("GET", "accueille/listeReglement", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    $(".listeReglement").prepend(data);
                }
            }
        }
        xhr.send();
    }

    function listeVillage() {
        // introduction d'ajax
        let xhr = new XMLHttpRequest();// creation d'objet XML 
        xhr.open("GET", "accueille/listeVillage", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    $(".listeVillage").prepend(data);
                }
            }
        }
        xhr.send();
    }

    function listeRoles() {
        // introduction d'ajax
        let xhr = new XMLHttpRequest();// creation d'objet XML 
        xhr.open("GET", "accueille/listeRoles", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    $(".listeRoles").prepend(data);
                }
            }
        }
        xhr.send();
    }


    function getLasteIDUser() {
        let xhr = new XMLHttpRequest();// creation d'objet XML
        xhr.open("GET", "accueille/LasteIdUser", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    if (data == "Success") {
                        setTimeout(addRolesUser, 100);
                    }
                }
            }
        }
        xhr.send();
    }

    function addRolesUser() {
        let xhr = new XMLHttpRequest();// creation d'objet XML
        xhr.open("GET", "accueille/addRolesUser", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    if (data == "Success") {
                        messageErreurs.textContent = data;
                        messageErreurs.style.display = "block";
                        messageErreurs.style.background = "#84ad7d82";
                        messageErreurs.style.color = "#fff";
                        messageErreurs.style.border = "1px solid #837acc";
                        for (var i = 0; i < champs.length - 1; i++) {
                            champs[i].value = "";
                        }
                        setTimeout(listeUser, 50);
                    }
                }
            }
        }
        xhr.send();
    }

    function listeUser() {
        // introduction d'ajax
        $(".TableUser").empty();
        let xhr = new XMLHttpRequest();// creation d'objet XML 
        xhr.open("GET", "accueille/listeUser", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    $(".TableUser").prepend(data);
                    setTimeout(ligneListes, 50);
                    setTimeout(readTable, 100);
                    cadreLiser();
                }
            }
        }
        xhr.send();
    }

    function cadreLiser() {
        // introduction d'ajax
        $(".cadreUser").empty();
        let xhr = new XMLHttpRequest();// creation d'objet XML 
        xhr.open("GET", "accueille/listeCadreClient", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    $(".cadreUser").prepend(data);
                    setTimeout(ligneListes, 50);
                    setTimeout(ligneCadreListes, 50);
                    setTimeout(readTable, 100);
                }
            }
        }
        xhr.send();
    }

});

function listeUser() {
    // introduction d'ajax
    $(".TableUser").empty();
    let xhr = new XMLHttpRequest();// creation d'objet XML 
    xhr.open("GET", "accueille/listeUser", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                $(".TableUser").prepend(data);
                setTimeout(ligneListes, 50);
                setTimeout(readTable, 100);
                cadreLiser();
            }
        }
    }
    xhr.send();
}

function cadreLiser() {
    // introduction d'ajax
    $(".cadreUser").empty();
    let xhr = new XMLHttpRequest();// creation d'objet XML 
    xhr.open("GET", "accueille/listeCadreClient", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                $(".cadreUser").prepend(data);
                setTimeout(ligneListes, 50);
                setTimeout(ligneCadreListes, 50);
                setTimeout(readTable, 100);
            }
        }
    }
    xhr.send();
}

function CheckBoxBtn(valeur) {
    tableauCheckBox.push(valeur);
}

function ligneListes() {
    $(".ligneListes").fadeIn(3000);
}
function ligneCadreListes() {
    $(".ligneCadre").fadeIn(3000);
}
function readTable() {
    $('#ListeTableUser').DataTable();
}

function faitActionRegelement(valeur) {
    champs[3].value = valeur;
}

function faitActionVillage(valeur) {
    champs[4].value = valeur;
}

function faitActionRoles(valeur) {
    champs[5].value = valeur;
}

function faitActionS(valeur) {

    let xhr = new XMLHttpRequest();// creation d'objet XML 
    xhr.open("GET", "accueille/supprimerRolesUser?idUser=" + valeur, true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // console.log(xhr.response);
                setIdUser(valeur);
                setTimeout(deleteUser, 100);
            }
        }
    }
    xhr.send();
}

function deleteUser() {
    let xhr = new XMLHttpRequest();// creation d'objet XML 
    xhr.open("GET", "accueille/supprimerUser?idUser=" + getId(), true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // console.log(xhr.response);
                listeUser();
            }
        }
    }
    xhr.send();
}

function setIdUser(v) {
    valeur = v;
}

function getId() {
    return valeur;
}