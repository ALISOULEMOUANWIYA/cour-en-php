<!doctype html>
<html>     
    <body>
        <h2> Les Tableaux </h2>

        
        <button onclick="supprimerLaste()">supprimer le dernier element</button>
        
        <button onclick="supprimerFirst()">supprimer le premier element</button>
        
        <button onclick="ajouterLaste()">Ajouer un element au debut du tableau</button>
        
        <button onclick="ajouterFirst()">Ajouer un element au debut du tableau</button>
        
        <button onclick="ajouterDeux()">Ajouter Deux Elements</button>
        
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
            
            function ajouterLaste(){
                personne.push("Kiwi");
         document.getElementById("demo2").innerHTML= Affiche_Tableau(personne);
            }
            
            function ajouterDeux(){
                personne.splice(0,0,"Kiwi","Sotche");
         document.getElementById("demo2").innerHTML= Affiche_Tableau(personne);
            }
            
            function ajouterFirst(){
                personne.unshift("Kiwi");
         document.getElementById("demo2").innerHTML= Affiche_Tableau(personne);
            }
            
            function supprimerLaste(){
                personne.pop();
         document.getElementById("demo2").innerHTML= Affiche_Tableau(personne);
            }
            
            function supprimerFirst(){
                personne.shift();
         document.getElementById("demo2").innerHTML= Affiche_Tableau(personne);
            }
        </script>
    </body>    
</html>