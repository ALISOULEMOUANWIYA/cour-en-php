<!doctype html>
<html>     
    <body>
        <h2>Setter (le mot-clé set)</h2>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'user strict';
            var personne = {
                  Nom : "Ali soule",
                  Prenom : "Mouanwiya",
                  age : 27,
                  coleuryeux : "Noir",
                  PseudoNom : "Rachnel Keyz",
                  language:"NO",
                  set lang(valeur){
                      this.language = valeur;
                  }
            };
            personne.lang = "fr";
            document.getElementById("demo").innerHTML = personne.language;
        </script>
    </body>    
</html>