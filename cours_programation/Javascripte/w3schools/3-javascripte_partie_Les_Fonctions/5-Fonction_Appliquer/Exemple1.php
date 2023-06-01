<!doctype html>
<html>     
    <body>
        <h2> Fonctions JavaScript </h2>
        
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
              fullNom : function(){
                  return(this.Nom+" "+this.Prenom);
              }
            } 
            document.getElementById("demo").innerHTML =
                Emsableur.fullNom.apply(MonObjet2);
        </script>
    </body>    
</html>