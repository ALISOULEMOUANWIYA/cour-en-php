<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <p id="demo1"></p>
        <p id="demo2"></p>
        <script>
            var personne = {
                Nom : "Ali Soule",
                Prenom : "Mouanwiya",
                Nationalite : "Comorien",
                Metier : "Programmeur",
                petit_Descriptio : function(){
                    return("Je m'appel "+this.Nom+" "+this.Prenom+" de nationalité "+this.Nationalite);
                }
            }
            document.getElementById("demo1").innerHTML =personne.petit_Descriptio();
            
            /*
                Arretenir:
                ---------
                Lorsqu'une variable JavaScript est déclarée avec le mot-clé "new", la variable est créée en tant qu'objet:
            */
            var produit = new String();
            produit = "Chocolat";
            document.getElementById("demo2").innerHTML = typeof produit+" "+produit; 
        </script>
    </body>    
</html>