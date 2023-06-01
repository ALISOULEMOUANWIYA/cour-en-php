"use strict";
const form = document.querySelector(".login form"),
  champs = form.querySelectorAll(".login form .field input"),
  continuebtn = form.querySelector(".button input"),
  messageErreurs = form.querySelector(".error-txt"),
  verification = "Success";

form.onsubmit = (e) => {
  e.preventDefault();
}

continuebtn.onclick = () => {
  // introduction d'ajax
  let xhr = new XMLHttpRequest();// creation d'objet XML 
  xhr.open("POST", "login/Logon", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (verification.localeCompare(data.trim()) == 0) {
          messageErreurs.textContent = data;
          messageErreurs.style.display = "block";
          messageErreurs.style.background = "#84ad7d82";
          messageErreurs.style.color = "#fff";
          messageErreurs.style.border = "1px solid #837acc";

          setTimeout(getData, 10);
        } else {
          messageErreurs.textContent = data;
          messageErreurs.style.display = "block";
          messageErreurs.style.background = "#ef8d9682";
          messageErreurs.style.color = "#721c24";
          messageErreurs.style.border = "1px solid #f5c6cb";
          for (var i = 1; i < champs.length - 1; i++) {
            champs[i].value = "";
          }
        }
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
}

function getData() {
  // introduction d'ajax
  let xhr = new XMLHttpRequest();// creation d'objet XML 
  xhr.open("POST", "login/UserCompte", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (IsNumber(data)) {
          setTimeout(RedirectionPage(Number(data)), 500);
        }
      }
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
}

function IsNumber(valeur) {
  try {
    Number(valeur);
    return true;
  } catch (error) {
    return false;
  }
}

function RedirectionPage(valeur) {
  messageErreurs.style.display = "none";
  // window.location.assign("accueille?view=" + valeur);
  // introduction d'ajax
  let xhr = new XMLHttpRequest();// creation d'objet XML 
  xhr.open("GET", "login/index?view=" + valeur, true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        for (var i = 0; i < champs.length - 1; i++) {
          champs[i].value = "";
        }
        // console.log(data);
        window.location.assign(data);
      }
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
}
