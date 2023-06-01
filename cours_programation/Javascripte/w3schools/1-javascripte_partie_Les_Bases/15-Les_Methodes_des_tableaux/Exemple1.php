<!doctype html>
<html>     
    <body>
        <h2> Les Tableaux </h2>

        <p>La méthode JavaScript <b>toString()</b> convertit un tableau en une chaîne de valeurs de tableau (séparées par des virgules).</p>
        
        <p id="demo1"></p>
        <p id="demo2"></p>
        <script>
            var personne = ["ali", "Soule", "Mouanwiya"];
            var trier = personne.sort();
           
           function Affiche_Tableau(Tableau){
               return(Tableau.toString());
           } 
           if(Array.isArray(personne)){
               document.getElementById("demo2").innerHTML= Affiche_Tableau(personne);
           }
        </script>
    </body>    
</html>