"use strict";
const searchBar = document.querySelector(".user .search input"),
    searchBtn = document.querySelector(".user .search button"),
    userList = document.querySelector(".user .user-list");
let tailleTableauAmiAjouter = 0,
    i = 0;
searchBtn.onclick = () => {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
    searchBtn.value = "";
}

searchBar.onkeyup = () => {
    let searchUser = searchBar.value;
    // introduction d'ajax
    if (searchUser != "") {
        searchBar.classList.add("active");
    } else {
        searchBar.classList.remove("active");
    }
    let xhr = new XMLHttpRequest(); // creation d'objet XML 
    xhr.open("POST", "controllers/scripte_controller_php/searche.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                userList.innerHTML = data;
            }
        }
    };
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xhr.send("searchUser=" + searchUser);
}

setInterval(() => {
    // introduction d'ajax
    let xhr = new XMLHttpRequest(); // creation d'objet XML 
    xhr.open("GET", "controllers/scripte_controller_php/TailleListesAmisAjouter.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let Taille = xhr.response;
                if (!searchBar.classList.contains("active")) {
                    tailleTableauAmiAjouter = Taille;
                }
            }
        }
    };
    xhr.send();
}, 500);

setInterval(() => {
    // introduction d'ajax
    let xhr = new XMLHttpRequest(); // creation d'objet XML 
    xhr.open("GET", "controllers/scripte_controller_php/listesDiscussion.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (!searchBar.classList.contains("active")) {
                    if (tailleTableauAmiAjouter > i) {
                        i++;
                        userList.innerHTML = data;
                    }
                }
            }
        }
    };
    xhr.send();
}, 500);