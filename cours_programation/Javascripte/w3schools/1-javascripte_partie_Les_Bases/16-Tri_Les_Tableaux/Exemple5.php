<!doctype html>
<html>     
    <body>
        <h2> Les Tableaux </h2>

        
        
        <p id="demo1"></p>
        <script>
            var personne = [40, 100, 1, 5, 25, 10];
           document.getElementById("demo1").innerHTML = Affiche_Tableau(personne);
           function Affiche_Tableau(Tableau){
//               return(Math.max.apply(null,Tableau));
               return(Math.min.apply(null,Tableau));
           } 
           
        </script>
    </body>    
</html>