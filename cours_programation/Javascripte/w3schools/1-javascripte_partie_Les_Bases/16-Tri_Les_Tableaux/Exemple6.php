<!doctype html>
<html>     
    <body>
        <h2> Les Tableaux </h2>

        
        <button onclick="afficher_tableaux()">
        clique pour afficher la plus grande ou la plus petite</button>
        <p id="demo1"></p>
        <p id="demo2"></p>
        <p id="demo3"></p>
        <p id="demo4"></p>
        <p id="demo5"></p>
        <script>
            var personne = [40, 100, 1, 5, 25, 10];
        document.getElementById("demo1").innerHTML =" ["+ personne+"]";
            var max = -Infinity;
            var min = Infinity;
            var superieur=1, inferieur=0;
           function Trouver_max(Tableau){
               var longueur = Tableau.length;
               
               while(longueur--){
                   if(Tableau[longueur]>max){
                       max = Tableau[longueur];
                   }
               }
               return(max);
           } 
           function Trouver_min(Tableau){
               var longueur = Tableau.length;
               while(longueur--){
                   if(Tableau[longueur]<min){
                       min = Tableau[longueur];
                   }
               }
               return(min);
           } 
            function afficher_tableaux(){
                if(superieur >inferieur){ document.getElementById("demo2").innerHTML ="Le plus grand est : "+ Trouver_max(personne);
                    inferieur = parseInt((Trouver_min(personne)));
                    superieur = 0;
                }else{ document.getElementById("demo2").innerHTML ="Le plus petite de la liste est : "+ Trouver_min(personne);
                    inferieur = 0;
                    superieur = parseInt((Trouver_max(personne)));
                }
            }
           
        </script>
    </body>    
</html>