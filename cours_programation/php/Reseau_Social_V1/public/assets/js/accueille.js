
"use strict";
$(document).ready(function () {
    const body = document.querySelector('body'),
        sidebar = body.querySelector('.sidebar'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        settings_menu = body.querySelector(".settings-menu"),
        pop_action1 = body.querySelector(".pop-action1"),
        popup_action2 = body.querySelector(".popup-action2"),
        popup_action3 = body.querySelector(".popup-action3"),
        nav_user_icon = document.querySelector(".nav-right .nav-user-icon"),
        logo = document.querySelector(".nav-center .pus-center .logo"),
        iconNav2 = document.querySelector(".navigation-left .pus-left .iconNav2"),
        iconNav3 = document.querySelector(".navigation-right .pus-right .iconNav3"),
        modeText = body.querySelector(".mode-text");



    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
        sidebar.classList.add("close");
    });

    modeSwitch.addEventListener("click", () => {
        body.classList.toggle("dark");

        if (localStorage.getItem("theme") == "light") {
            localStorage.setItem("theme", "dark");
        } else {
            localStorage.setItem("theme", "light");
        }
    });

    nav_user_icon.addEventListener("click", () => {
        console.log("ok");
        settings_menu.classList.toggle("settings-menu-height");
    });

    logo.addEventListener("click", () => {
        // console.log("ok");
        pop_action1.classList.toggle("pop-action1-max");
    });

    iconNav2.addEventListener("click", () => {
        // console.log("ok");
        popup_action2.classList.toggle("popup-action2-max");
    });

    iconNav3.addEventListener("click", () => {
        // console.log("ok");
        popup_action3.classList.toggle("popup-action3-max");
    });


    if (localStorage.getItem("theme") == "light") {
        body.classList.remove("dark");
        // console.log("ok 1");
    } else if (localStorage.getItem("theme") == "dark") {
        body.classList.add("dark");
        // console.log("ok 2");
    } else {
        localStorage.setItem("theme", "light");
        // console.log("ok 3");
    }

    const trigger = document.querySelector(".pus-li menu > .trigger");
    trigger.addEventListener('click', (e) => {
        e.currentTarget.parentElement.classList.toggle("open");
    });
    const trigger0 = document.querySelector(".pus-li0 menu > .trigger1");
    trigger0.addEventListener('click', (e) => {
        e.currentTarget.parentElement.classList.toggle("open");
    });



    // const messageBtnMenu = document.querySelector(".wrapper .ListeMenu .Menu .NavigationBtn.message"),
    //     AmiBtnMenu = document.querySelector(".wrapper .ListeMenu .Menu .NavigationBtn.amiM"),
    //     membreBtnMenu = document.querySelector(".wrapper .ListeMenu .Menu .NavigationBtn.membreM"),
    //     invitationBtnMenu = document.querySelector(".wrapper .ListeMenu .Menu .NavigationBtn.invitationM"),

    //     PageMessage = document.querySelector(".wrapper .ListeMenu2 .MessageAjouterPage"),
    //     PageAmi = document.querySelector(".wrapper .ListeMenu2 .amiPage"),
    //     PageMembre = document.querySelector(".wrapper .ListeMenu2 .membrePage"),
    //     PageInvitation = document.querySelector(".wrapper .ListeMenu2 .invitationPage");



    // messageBtnMenu.onclick = () => {
    //     console.log("entrer");
    //     messageBtnMenu.classList.remove("active");
    //     messageBtnMenu.classList.add("active");
    //     membreBtnMenu.classList.remove("active");
    //     AmiBtnMenu.classList.remove("active");
    //     invitationBtnMenu.classList.remove("active");


    //     PageMessage.style.display = "initial";
    //     PageMessage.style.transition = "0.5s";
    //     PageMessage.style.color = "#fff";

    //     PageAmi.style.display = "none";
    //     PageMembre.style.display = "none";
    //     PageInvitation.style.display = "none";

    // }
    // AmiBtnMenu.onclick = () => {
    //     AmiBtnMenu.classList.add("active");
    //     messageBtnMenu.classList.remove("active");
    //     membreBtnMenu.classList.remove("active");
    //     invitationBtnMenu.classList.remove("active");


    //     PageAmi.style.display = "initial";
    //     PageAmi.style.transition = "0.5s";
    //     PageAmi.style.color = "#fff";

    //     PageMessage.style.display = "none";
    //     PageMembre.style.display = "none";
    //     PageInvitation.style.display = "none";

    // }

    // membreBtnMenu.onclick = () => {
    //     membreBtnMenu.classList.add("active");
    //     messageBtnMenu.classList.remove("active");
    //     invitationBtnMenu.classList.remove("active");
    //     AmiBtnMenu.classList.remove("active");


    //     PageMembre.style.display = "inherit";
    //     PageMembre.style.transition = "0.5s";
    //     PageMembre.style.color = "#fff";

    //     PageMessage.style.display = "none";
    //     PageAmi.style.display = "none";
    //     PageInvitation.style.display = "none";

    // }

    // invitationBtnMenu.onclick = () => {
    //     invitationBtnMenu.classList.add("active");
    //     messageBtnMenu.classList.remove("active");
    //     membreBtnMenu.classList.remove("active");
    //     AmiBtnMenu.classList.remove("active");

    //     PageInvitation.style.display = "inherit";
    //     PageInvitation.style.transition = "0.5s";
    //     PageInvitation.style.color = "#fff";

    //     PageMessage.style.display = "none";
    //     PageAmi.style.display = "none";
    //     PageMembre.style.display = "none";

    // }

});






