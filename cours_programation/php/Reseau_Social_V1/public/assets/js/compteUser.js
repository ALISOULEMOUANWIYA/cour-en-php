
"use strict";
$(document).ready(function () {
    const body = document.querySelector('body'),
        sidebar = body.querySelector('.sidebar'),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        settings_menu = body.querySelector(".settings-menu"),
        pop_action1 = body.querySelector(".pop-action1"),
        nav_user_icon = document.querySelector(".nav-right .nav-user-icon"),
        logo = document.querySelector(".nav-center .pus-center .logo");


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

});






