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
                
                var i,j,k;
                for(i=personne.length-1; i>0; i-- ){
                    j=Math.floor(Math.random()*i);
                    k=personne[i];
                    personne[i]=personne[j];
                    personne[j]=k;
                }
         document.getElementById("demo1").innerHTML= Affiche_Tableau(personne);
            }

            function Renverser(){
                personne.reverse(function(a,b){
//                    return(a-b);
                    return(0.5-Math.random());
                });
         document.getElementById("demo1").innerHTML= Affiche_Tableau(personne);
            }
        </script>
    </body>    
</html>