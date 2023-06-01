<!doctype html>
<html>     
    <body>
        <h2> Les Tableaux </h2>

        
        <button onclick="decouper()">decouper le tableau</button>
        
        <p id="demo1"></p>
        <p id="demo2"></p>
        <p id="demo3"></p>
        <p id="demo4"></p>
        <script>
            var personne = ["ali", "Soule", "Mouanwiya","Djoumoichongo"];
            var trier = personne.sort();
           
           function Affiche_Tableau(Tableau){
               return(Tableau);
           } 
           if(Array.isArray(personne)){
        document.getElementById("demo1").innerHTML= Affiche_Tableau(personne);
           }

            function decouper(){
//                var tableauFinale = personne.splice(1);
//                var tableauFinale = personne.splice(3);
                var tableauFinale = personne.slice(1,2);
         document.getElementById("demo2").innerHTML= Affiche_Tableau(tableauFinale);
            }
        </script>
    </body>    
</html>