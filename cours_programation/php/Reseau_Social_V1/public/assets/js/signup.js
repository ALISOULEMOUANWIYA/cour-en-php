"use strict";
const form = document.querySelector(".signup form"),
  champs = form.querySelectorAll(".signup form .field input"),
  continuebtn = form.querySelector(".button input"),
  messageErreurs = form.querySelector(".error-txt");

form.onsubmit = (e) => {
  e.preventDefault();
}

continuebtn.onclick = () => {
  // introduction d'ajax
  let xhr = new XMLHttpRequest();// creation d'objet XML 
  xhr.open("POST", "inscription/Logon", true);
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
          setTimeout(RedirectionPage, 2000);
        } else {
          messageErreurs.textContent = data;
          messageErreurs.style.display = "block";
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
}

function RedirectionPage() {
  window.location.assign("http://localhost/cours_programation/Javascripte/messagerie/index.php");
}
