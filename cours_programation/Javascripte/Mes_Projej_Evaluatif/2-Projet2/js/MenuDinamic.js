"use strict";
$(document).ready(function () {
    var genratoreListe = document.querySelector(".navigation ul li:nth-child(6).active~.indicator");

    function Menu(arrayIonicons, taille) {
        let declache = 0,
            i = 0;
        const daw = document.querySelector(".pus");
        const nameIonicons = new Map(arrayIonicons);
        daw.innerHTML = "<div class='indicator'></div>";
        const indicator = document.querySelector(".indicator");

        nameIonicons.forEach(function (value, key) {
            i++;
            if (declache == 0) {
                indicator.insertAdjacentHTML("beforebegin", "<li class='list active'> <a href='#'> <span class='icon'> <ion-icon name='" + key + "'></ion-icon> </span> <span class='text'>" + value + "</span></a></li>");
                declache = 1;
            } else {
                indicator.insertAdjacentHTML("beforebegin", "<li class='list'> <a href='#'> <span class='icon'> <ion-icon name='" + key + "'></ion-icon> </span> <span class='text'>" + value + "</span></a></li>");
            }
        });

        if (taille == i) {
            const liste = document.querySelectorAll(".list");

            function activeLink() {
                liste.forEach((item) =>
                    item.classList.remove("active")); // remove active
                this.classList.add("active");
            }
            //after click button remove pointe
            liste.forEach((item) =>
                item.addEventListener("click", activeLink));
        }
        // if (window.get)
    }

    // array nameIonicons
    const arrayIonicons = new Map([
        ["home", "Home"],
        ["person", "Profile"],
        ["chatbubbles", "Message"],
        ["camera", "Photo"],
        ["settings", "Settings"],
        ["pie", "Diagramme"]
    ]);
    const menuListe = new Menu(arrayIonicons, arrayIonicons.size);
});