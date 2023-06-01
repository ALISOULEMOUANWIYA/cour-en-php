<!doctype html>
<html>     
    <body>
        <h2> Les Tableaux </h2>

        <p></p>
        
        <p id="demo1"></p>
        <p id="demo2"></p>
        <script>
            var personne = ["ali", "Soule", "Mouanwiya"];
            var trier = personne.sort();
           function MonTableau(Tableau){
               return(Tableau.constructor.toString().indexOf("Array") > -1);
           }
           function Affiche_Tableau(Tableau){
               return(Tableau);
           }
           if(personne instanceof Array){
            document.getElementById("demo1").innerHTML= MonTableau(personne);  
           } 
           if(Array.isArray(personne)){//si tableau est un tableau dont personne Alors retourne true  et entrer dans la boucle
               document.getElementById("demo2").innerHTML= Affiche_Tableau(personne);
           }
            
        </script>
    </body>    
</html>