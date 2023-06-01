"use strict";

const messageBtnMenu = document.querySelector(".wrapper .ListeMenu .Menu .NavigationBtn.message"),
    AmiBtnMenu = document.querySelector(".wrapper .ListeMenu .Menu .NavigationBtn.amiM"),
    membreBtnMenu = document.querySelector(".wrapper .ListeMenu .Menu .NavigationBtn.membreM"),
    invitationBtnMenu = document.querySelector(".wrapper .ListeMenu .Menu .NavigationBtn.invitationM"),

    PageMessage = document.querySelector(".wrapper .ListeMenu2 .MessageAjouterPage"),
    PageAmi = document.querySelector(".wrapper .ListeMenu2 .amiPage"),
    PageMembre = document.querySelector(".wrapper .ListeMenu2 .membrePage"),
    PageInvitation = document.querySelector(".wrapper .ListeMenu2 .invitationPage");



messageBtnMenu.onclick = () => {
    // console.log("entrer");
    messageBtnMenu.classList.remove("active");
    messageBtnMenu.classList.add("active");
    membreBtnMenu.classList.remove("active");
    AmiBtnMenu.classList.remove("active");
    invitationBtnMenu.classList.remove("active");


    PageMessage.style.display = "initial";
    PageMessage.style.transition = "0.5s";
    PageMessage.style.color = "#fff";

    PageAmi.style.display = "none";
    PageMembre.style.display = "none";
    PageInvitation.style.display = "none";

}
AmiBtnMenu.onclick = () => {
    AmiBtnMenu.classList.add("active");
    messageBtnMenu.classList.remove("active");
    membreBtnMenu.classList.remove("active");
    invitationBtnMenu.classList.remove("active");


    PageAmi.style.display = "initial";
    PageAmi.style.transition = "0.5s";
    PageAmi.style.color = "#fff";

    PageMessage.style.display = "none";
    PageMembre.style.display = "none";
    PageInvitation.style.display = "none";

}

membreBtnMenu.onclick = () => {
    membreBtnMenu.classList.add("active");
    messageBtnMenu.classList.remove("active");
    invitationBtnMenu.classList.remove("active");
    AmiBtnMenu.classList.remove("active");


    PageMembre.style.display = "inherit";
    PageMembre.style.transition = "0.5s";
    PageMembre.style.color = "#fff";

    PageMessage.style.display = "none";
    PageAmi.style.display = "none";
    PageInvitation.style.display = "none";

}

invitationBtnMenu.onclick = () => {
    invitationBtnMenu.classList.add("active");
    messageBtnMenu.classList.remove("active");
    membreBtnMenu.classList.remove("active");
    AmiBtnMenu.classList.remove("active");

    PageInvitation.style.display = "inherit";
    PageInvitation.style.transition = "0.5s";
    PageInvitation.style.color = "#fff";

    PageMessage.style.display = "none";
    PageAmi.style.display = "none";
    PageMembre.style.display = "none";

}