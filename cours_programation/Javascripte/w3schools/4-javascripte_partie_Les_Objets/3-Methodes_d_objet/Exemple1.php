<!doctype html>
<html>     
    <body>
        <h2> Fonctions JavaScript </h2>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'user strict';
            var textes = "";
            var personne = {
              Nom : "Ali soule",
              Prenom : "Mouanwiya",
              age : 27,
              coleuryeux : "Noir",
              PseudoNom : "Rachnel Keyz",
              fullName : function(){
                return(this.Nom+" "+this.Prenom); 
              }
            };
            personne.Nationamite = "Comorien";// Ajout d'une nouvelle propriete
            delete personne.PseudoNom ;// suprimer le propriete
            for(let p in  personne){
                if(personne[p] !== personne.fullName){
                    textes += personne[p]+" "; 
                }else{
                    textes +="("+personne.fullName()+") "; 
                }
            }
            document.getElementById("demo").innerHTML = textes;
            document.getElementById("demo1").innerHTML = personne.fullName();
        </script>
    </body>    
</html>