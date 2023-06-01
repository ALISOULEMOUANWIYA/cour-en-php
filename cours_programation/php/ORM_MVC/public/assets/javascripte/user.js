"use strict";

$(document).ready(function(){
    let url = document.URL;
    var a = "hello";
    console.log(url.substr(-1));

});



// function getData() {
//   // introduction d'ajax

//   let xhr = new XMLHttpRequest();// creation d'objet XML 
//   xhr.open("GET", "login/UserCompte?idMembre="+, true);
//   xhr.onload = () => {

//     if (xhr.readyState === XMLHttpRequest.DONE) {

//       if (xhr.status === 200) {
//         console.log("getData");
//         let data = xhr.response;
//       }
//     }
//   }
//   let formData = new FormData(form);
//   xhr.send(formData);
// }

function RedirectionPage(valeur) {
  messageErreurs.style.display = "none";
  window.location.assign("accueille?view=" + valeur);
}
