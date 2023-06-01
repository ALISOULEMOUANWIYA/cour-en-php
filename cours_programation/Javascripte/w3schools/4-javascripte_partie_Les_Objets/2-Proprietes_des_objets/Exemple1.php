<!doctype html>
<html>     
    <body>
        <h2> Fonctions JavaScript </h2>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'user strict';
            var textes = "";
            var personne = {
              Nom : "Ali soule",
              Prenom : "Mouanwiya",
              age : 27,
              coleuryeux : "Noir",
              PseudoNom : "Rachnel Keyz"
            };
            personne.Nationamite = "Comorien";// Ajout d'une nouvelle propriete
            delete personne.PseudoNom ;// suprimer le propriete
            for(let p in  personne){
                textes += personne[p]+" "; 
            }
            document.getElementById("demo").innerHTML = personne.PseudoNom;
        </script>
    </body>    
</html>