<!doctype html>
<html>     
    <body>
        <h2>JSON.stringify ne stringifiera pas les fonctions:</h2>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'user strict';
            var textes = "";
            var MonTableau;
            var personne = {
              Nom : "Ali soule",
              Prenom : "Mouanwiya",
              age : 27,
              coleuryeux : "Noir",
              PseudoNom : "Rachnel Keyz",
              ajourdhuit: function(){
                  return(new Date());
              }
            };
            MonTableau = JSON.stringify(personne);
            document.getElementById("demo").innerHTML = MonTableau;
        </script>
    </body>    
</html>