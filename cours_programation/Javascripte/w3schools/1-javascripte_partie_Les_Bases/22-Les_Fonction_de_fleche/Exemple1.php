<! DOCTYPE html>
<html>
    <body>
        <button type="button" onclick="Cliquer()" id="style">Actualiser</button>
        <p id = "demo"> </p>
        <p id = "demo1"> </p>
        <p id = "demo2"> </p>
        <p id = "demo3"> </p>
        <p id = "demo4"> </p>
        <p id = "demo5"> </p>
        <p id = "demo6"> </p>
        <p id = "demo7"> </p>
        <p id = "demo8"> </p>
        
        <script>
            "use strict";
            var afficher;
            // fonction de flacher
            afficher = function(){
                var personne = {
                    Nom:"John",
                    Prenom:"Doe",
                    Id:5566
                }
                var Reformulation = {
                    FullNom : function(){
                      return(this.Nom+" "+this.Prenom);   
                    }
                }
                return(Reformulation.FullNom.call(personne));
            }
            
            function Cliquer(){
               document.getElementById("demo").innerHTML = afficher(); 
               document.getElementById("style").style.display
               = "none";
                //                document.getElementById("demo").innerHTML = Reformulation.FullNom.apply(personne);
            }
        </script>
    </body>
</html>