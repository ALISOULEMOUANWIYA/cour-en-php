"use strict";
const
    ListAmisAjouter = document.querySelector(".wrapper .ListeMenu2 .amiPage .userAmijouter "),
    ListeMembreCarde = document.querySelector(".wrapper .ListeMenu2 .membrePage .userMembre"),
    ListeInvitationCarde = document.querySelector(".wrapper .ListeMenu2 .invitationPage .userInvitation"),

    ListeIvitationCarde = document.querySelector(".wrapper .ListeMenu2 .invitationPage .userInvitation"),
    InvitationCarde = document.querySelector(".wrapper .ListeMenu2 .invitationPage .user_list_invitation .InvitationPersonne");

//-------------------------------
var tableauBtn,
    tableauCardM,
    tableauIdMembre,
    tableauIcn,

    tableauCardINV,
    actionINvBtn1,
    actionINvBtnIconne1,
    actionINvBtn2,
    actionINvBtnIconne2,
    tableauIdINv,

    tableauCardAmis,
    actionAmisBtn1,
    actionAmisBtnIconne1,
    tableauIdAmis;
//-------------------------------

let tailleTableauMembre = 0,
    tailleTableauIn = 0,
    tailleTableauAmisAjouter = 0,
    j = 0,
    l = 0,
    m = 0;


// nombre d'inscription
setInterval(() => {
    // introduction d'ajax
    let xhr = new XMLHttpRequest(); // creation d'objet XML 
    xhr.open("GET", "controllers/scripte_controller_php/TailleTableauMembre.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let Taille = xhr.response;
                tailleTableauMembre = Taille;
            }
        }
    };
    xhr.send();
}, 5000);

// nombre d'invitation
setInterval(() => {
    // introduction d'ajax
    let xhr = new XMLHttpRequest(); // creation d'objet XML 
    xhr.open("GET", "controllers/scripte_controller_php/TailleTableauInvitation.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let Taille = xhr.response;
                if (Taille == 0) {
                    l = 0;
                    j = 0;
                    m = 0;
                    tailleTableauIn = 1;
                } else {
                    tailleTableauIn = Taille;
                }
            }
        }
    };
    xhr.send();
}, 5000);

// nombre d'amis ajouter
setInterval(() => {
    // introduction d'ajax
    let xhr = new XMLHttpRequest(); // creation d'objet XML 
    xhr.open("GET", "controllers/scripte_controller_php/TailleListesAmisAjouter.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let Taille = xhr.response;
                if (Taille == 0) {
                    l = 0;
                    j = 0;
                    m = 0;
                    tailleTableauAmisAjouter = 1;
                } else {
                    tailleTableauAmisAjouter = Taille;
                }
            }
        }
    };
    xhr.send();
}, 5000);

// listes des membre ajouter
setInterval(() => {
    // introduction d'ajax
    let xhr = new XMLHttpRequest(); // creation d'objet XML 
    xhr.open("GET", "controllers/scripte_controller_php/ListeMembre.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                if (tailleTableauMembre > j) {
                    let data = xhr.response;
                    j += 1;
                    ListeMembreCarde.innerHTML = data;
                }
            }
        }
    };
    xhr.send();
}, 5000);

// listes des invitation
setInterval(() => {
    // introduction d'ajax
    let xhr = new XMLHttpRequest(); // creation d'objet XML 
    xhr.open("GET", "controllers/scripte_controller_php/ListeInvitation.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                if (tailleTableauIn > l) {
                    let data = xhr.response;
                    l += 1;
                    ListeInvitationCarde.innerHTML = data;
                }
            }
        }
    };
    xhr.send();
}, 5000);

// listes des amis
setInterval(() => {
    // introduction d'ajax
    let xhr = new XMLHttpRequest(); // creation d'objet XML 
    xhr.open("GET", "controllers/scripte_controller_php/ListeAmis.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (tailleTableauAmisAjouter > m) {
                    m += 1;
                    ListAmisAjouter.innerHTML = data;
                }
            }
        }
    };
    xhr.send();
}, 4000);

// actualliseur suppression
setInterval(() => {
    // introduction d'ajax
    let xhr = new XMLHttpRequest(); // creation d'objet XML 
    xhr.open("GET", "controllers/scripte_controller_php/Actualisateur.php?Invitation3=" + 3, true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {

                if ((xhr.response) == 1) {
                    // console.log(xhr.response);
                    tailleTableauAmisAjouter = 0;
                    m = 0;

                    tailleTableauIn = 0;
                    l = 0;

                    tailleTableau = 0;
                    j = 0;
                }
            }
        }
    };
    xhr.send();
}, 4000);

function faitActionAccepter1(valeur) {
    setTimeout(Effacer, 1000);

    function Effacer() {
        actionINvBtn2 = document.querySelector(".wrapper .ListeMenu2 .invitationPage .userInvitation .user_list_invitation" + valeur + " .invitation" + valeur + " .actionSup" + valeur + " .ListeButton .button2");
        actionINvBtn2.style.display = "none";
        actionINvBtn1 = document.querySelector(".wrapper .ListeMenu2 .invitationPage .userInvitation .user_list_invitation" + valeur + " .invitation" + valeur + " .actionSup" + valeur + " .ListeButton .button1");
        actionINvBtn1.style.transition = "0.5s";
        actionINvBtn1.style.background = "#00ff2bad";
        actionINvBtn1.style.border = "2px solid black";
        actionINvBtn1.style.color = "#fff";
        actionINvBtn1.disabled = true;

        setTimeout(Masquer, 1000);

        function Masquer() {
            tableauCardINV = document.querySelector(".wrapper .ListeMenu2 .invitationPage .userInvitation .user_list_invitation" + valeur + " "),
                tableauIdINv = document.querySelector(".wrapper .ListeMenu2 .invitationPage .userInvitation .user_list_invitation" + valeur + " .invitation" + valeur + " .actionSup" + valeur + " .InvitationUnique" + valeur + "");
            let xhr = new XMLHttpRequest(); // creation d'objet XML  
            xhr.open("GET", "controllers/scripte_controller_php/AjouterInvitaton.php?idMembre=" + Number(tableauIdINv.textContent) + "&Invitation=" + 1, true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log(xhr.response);
                        actionINvBtnIconne1 = document.querySelector(".wrapper .ListeMenu2 .invitationPage .userInvitation .user_list_invitation" + valeur + " .invitation" + valeur + " .actionSup" + valeur + " .ListeButton .button1 .fa");
                        actionINvBtnIconne1.classList.remove("trash-o");
                        actionINvBtnIconne1.classList.add("fa-check");
                    }
                }
            };
            xhr.send();
            setTimeout(enlever, 4000);

            function enlever() {
                tableauCardINV.remove();
                tailleTableauAmisAjouter = 0;
                m = 0;

                tailleTableau = 0;
                j = 0;

                tailleTableauIn = 0;
                l = 0;

            }
        }
    }
}

function faitActionAccepter2(valeur) {
    setTimeout(Effacer, 1000);

    function Effacer() {
        actionINvBtn1 = document.querySelector(".wrapper .ListeMenu2 .invitationPage .userInvitation .user_list_invitation" + valeur + " .invitation" + valeur + " .actionSup" + valeur + " .ListeButton .button1");
        actionINvBtn1.style.display = "none";
        actionINvBtn2 = document.querySelector(".wrapper .ListeMenu2 .invitationPage .userInvitation .user_list_invitation" + valeur + " .invitation" + valeur + " .actionSup" + valeur + " .ListeButton .button2");
        actionINvBtn2.style.transition = "0.5s";
        actionINvBtn2.style.background = "red";
        actionINvBtn2.style.border = "2px solid black";
        actionINvBtn2.style.color = "#fff";
        actionINvBtn2.disabled = true;

        setTimeout(Masquer, 1000);

        function Masquer() {
            tableauCardINV = document.querySelector(".wrapper .ListeMenu2 .invitationPage .userInvitation .user_list_invitation" + valeur + " "),
                tableauIdINv = document.querySelector(".wrapper .ListeMenu2 .invitationPage .userInvitation .user_list_invitation" + valeur + " .invitation" + valeur + " .actionSup" + valeur + " .InvitationUnique" + valeur + "");
            let xhr = new XMLHttpRequest(); // creation d'objet XML 
            xhr.open("GET", "controllers/scripte_controller_php/SupprimerDemande.php?idMembre=" + Number(tableauIdINv.textContent) + "&Invitation=" + 2, true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log(xhr.response);
                        actionINvBtnIconne2 = document.querySelector(".wrapper .ListeMenu2 .invitationPage .userInvitation .user_list_invitation" + valeur + " .invitation" + valeur + " .actionSup" + valeur + " .ListeButton .button2 .fa");
                        actionINvBtnIconne2.classList.remove("trash-o");
                        actionINvBtnIconne2.classList.add("fa-check");
                    }
                }
            };
            xhr.send();
            setTimeout(enlever, 3000);

            function enlever() {
                tableauCardINV.remove();
                tailleTableauAmisAjouter = 0;
                m = 0;

                tailleTableauIn = 0;
                l = 0;

                tailleTableau = 0;
                j = 0;

            }
        }
    }
}

function faitActionAccepter3(valeur) {
    setTimeout(Effacer, 1000);

    function Effacer() {
        actionAmisBtn1 = document.querySelector(".wrapper .ListeMenu2 .amiPage .userAmijouter .user_list_Amis" + valeur + " .AmisAjouter" + valeur + " .action" + valeur + " .ListeButton .button3");
        actionAmisBtn1.style.transition = "0.5s";
        actionAmisBtn1.style.background = "red";
        actionAmisBtn1.style.border = "2px solid black";
        actionAmisBtn1.style.color = "#fff";
        actionAmisBtn1.disabled = true;

        setTimeout(Masquer, 1000);

        function Masquer() {
            tableauCardAmis = document.querySelector(".wrapper .ListeMenu2 .amiPage .userAmijouter .user_list_Amis" + valeur + " ");
            tableauIdAmis = document.querySelector(".wrapper .ListeMenu2 .amiPage .userAmijouter .user_list_Amis" + valeur + " .AmisAjouter" + valeur + " .action" + valeur + " .InvitationUnique" + valeur + "");
            let xhr = new XMLHttpRequest(); // creation d'objet XML 
            xhr.open("GET", "controllers/scripte_controller_php/SupprimerAmisAjouter.php?idMembre=" + Number(tableauIdAmis.textContent) + "&Invitation=" + 1, true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        actionAmisBtnIconne1 = document.querySelector(".wrapper .ListeMenu2 .amiPage .userAmijouter .user_list_Amis" + valeur + " .AmisAjouter" + valeur + " .action" + valeur + " .ListeButton .button3 .fa");
                        actionAmisBtnIconne1.classList.remove("fa-trash-o");
                        actionAmisBtnIconne1.classList.add("fa-check");
                    }
                }
            };
            xhr.send();
            setTimeout(enlever, 3000);

            function enlever() {
                tableauCardAmis.remove();
                tailleTableauAmisAjouter = 0;
                m = 0;

                tailleTableauIn = 0;
                l = 0;

                tailleTableau = 0;
                j = 0;

            }
        }
    }
}

function faitAction(valeur) {
    tableauIdMembre = document.querySelector(".wrapper .ListeMenu2 .membrePage .user_list_membre" + valeur + " .membre" + valeur + " .action" + valeur + " .MembreUnique" + valeur + "");
    tableauIcn = document.querySelector(".wrapper .ListeMenu2 .membrePage .user_list_membre" + valeur + " .membre" + valeur + " .action" + valeur + " .boutton" + valeur + " .fa");
    tableauIcn.classList.remove("fa-plus-circle");
    tableauIcn.classList.add("fa-check-square-o");
    setTimeout(Effacer, 3000);

    function Effacer() {
        tableauIcn.remove();
        tableauBtn = document.querySelector(".wrapper .ListeMenu2 .membrePage .user_list_membre" + valeur + " .membre" + valeur + " .action" + valeur + " .boutton" + valeur + "");
        tableauBtn.innerHTML = "En attente...";
        tableauBtn.disabled = true;
        tableauBtn.style.background = "#635959ad";
        tableauBtn.classList.add("active");
        setTimeout(Masquer, 3000);

        function Masquer() {
            tableauCardM = document.querySelector(".wrapper .ListeMenu2 .membrePage .user_list_membre" + valeur + " "),
                tableauIdMembre = document.querySelector(".wrapper .ListeMenu2 .membrePage .user_list_membre" + valeur + " .membre" + valeur + " .action" + valeur + " .MembreUnique" + valeur + "");
            let xhr = new XMLHttpRequest(); // creation d'objet XML 
            xhr.open("GET", "controllers/scripte_controller_php/ajouterAmi.php?idMembre=" + Number(tableauIdMembre.textContent) + "&Invitation=" +
                2, true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response;
                        tableauBtn.innerHTML = data;
                    }
                }
            };
            xhr.send();
            setTimeout(enlever, 3000);

            function enlever() {
                tableauCardM.remove();
                tailleTableauAmisAjouter = 0;
                m = 0;

                tailleTableauIn = 0;
                l = 0;

                tailleTableau = 0;
                j = 0;

            }
        }
    }
}