const BtnEmail = document.querySelector(".wrapper .cadreEmail .form .Button .send"),
    inputEmail = document.querySelector(".wrapper .cadreEmail .form .field .champInpute .Email"),
    inputNom = document.querySelector(".wrapper .cadreEmail .form .champInpute .Nom");

BtnEmail.onclick = () => {
    // introduction d'ajax
    let xhr = new XMLHttpRequest(); // creation d'objet XML 
    xhr.open("GET", "transmeteur.php?Email=" + inputEmail.value + "&Nom=" + inputNom.value, true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // console.log((xhr.response));
                if (xhr.response == 1) {
                    console.log("1");
                    inputEmail.value = "";
                    inputNom.value = "";
                    inputEmail.placeholder = "Envoyer";
                    inputNom.placeholder = "Avec succée";
                } else if (xhr.response == 0) {
                    inputEmail.placeholder = "Saisie obligatoir";
                    inputNom.placeholder = "Saisie obligatoir";
                }
            }
        }
    };
    xhr.send();
}