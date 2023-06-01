<!doctype html>
<html>     
    <body>
        <h2> Fonctions JavaScript </h2>
        <p> Cet exemple appelle la méthode fullName de personne, en l'utilisant sur personne1:
        </p>
        <p id="demo"></p>
        <p id="demo1"></p>
        <script>
            'user strict';
            var MonObjet = {
              Nom : "Ali soule",
              Prenom : "Mouanwiya",
            };
            var MonObjet2 = {
              Nom : "Rachnel",
              Prenom : "Keyz",
            };
            var Emsableur = {
              fullNom : function(city, country){
                  return(this.Nom+" "+this.Prenom+" de "+city+" "+country);
              }
            } 
            document.getElementById("demo").innerHTML =
                Emsableur.fullNom.call(MonObjet)+" dit "+Emsableur.fullNom.call(MonObjet2, "Moroni","Comores");
        </script>
    </body>    
</html>