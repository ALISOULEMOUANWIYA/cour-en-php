<!doctype html>
<html>     
    <body>
        <h2> Les Tableaux </h2>

        
        <button onclick="Trier()">Trier le tableau</button>
        <button onclick="Renverser()">Renverser le tableau</button>
        
        <p id="demo1"></p>
        <p id="demo2"></p>
        <p id="demo3"></p>
        <p id="demo4"></p>
        <script>
            var personne = ["ali", "Soule", "Mouanwiya","Djoumoichongo"];
           
           function Affiche_Tableau(Tableau){
               return(Tableau);
           } 
           if(Array.isArray(personne)){
        document.getElementById("demo1").innerHTML= Affiche_Tableau(personne);
           }

            function Trier(){
         document.getElementById("demo1").innerHTML= Affiche_Tableau(personne.sort());
            }

            function Renverser(){
         document.getElementById("demo1").innerHTML= Affiche_Tableau(personne.reverse());
            }
        </script>
    </body>    
</html>