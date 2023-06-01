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
            var personne = [40, 100, 1, 5, 25, 10];
           
           function Affiche_Tableau(Tableau){
               return(Tableau);
           } 
           if(Array.isArray(personne)){
        document.getElementById("demo1").innerHTML= Affiche_Tableau(personne);
           }

            function Trier(){
                //arranger par ordre croissante
                personne.sort(function(a,b){
                    return(a-b)
                });
         document.getElementById("demo1").innerHTML= Affiche_Tableau(personne);
            }

            function Renverser(){
                // renverser l'ordre
                personne.reverse(function(a,b){
                    return(a-b)
                });
         document.getElementById("demo1").innerHTML= Affiche_Tableau(personne);
            }
        </script>
    </body>    
</html>