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
              fullNom : function(){
                  return(this.Nom+" "+this.Prenom);
              }
            };
            document.getElementById("demo").innerHTML =
                MonObjet.fullNom();
        </script>
    </body>    
</html>