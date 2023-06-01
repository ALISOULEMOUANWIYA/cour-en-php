<!doctype html>
<html>     
    <body>
        <h2> Les Tableaux </h2>

        <p>La méthode <b>join()</b> joint également tous les éléments du tableau dans une chaîne.</p>
        
        <button onclick="Supprimer()">Suprimer le dernier Element</button>
        <p id="demo2"></p>
        <script>
            var personne = ["ali", "Soule", "Mouanwiya","Djoumoichongo"];
            var trier = personne.sort();
           
           function Affiche_Tableau(Tableau){
               return(Tableau.join("*"));
           } 
           if(Array.isArray(personne)){
               document.getElementById("demo2").innerHTML= Affiche_Tableau(personne);
           }
            function Supprimer(){
                personne.pop();
         document.getElementById("demo2").innerHTML= Affiche_Tableau(personne);
            }
        </script>
    </body>    
</html>