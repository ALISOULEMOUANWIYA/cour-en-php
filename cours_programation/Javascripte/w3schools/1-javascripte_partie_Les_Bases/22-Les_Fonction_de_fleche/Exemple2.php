<! DOCTYPE html>
<html>
    <style>
        #aff{
            display: none;
        }
    </style>
    <body>
        
        <button type="button" onclick="Cliquer()" id="style">afficher</button>
        <button type="button" onclick="Masquer()" id="aff" >Masquer</button>
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
            afficher = () => {
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
               document.getElementById("demo").style.display = "initial";
               document.getElementById("style").style.display
               = "none";
               document.getElementById("aff").style.display
               = "initial";
                //                document.getElementById("demo").innerHTML = Reformulation.FullNom.apply(personne);
            }
            
            function Masquer(){
               document.getElementById("demo").style.display = "none"; 
               document.getElementById("style").style.display
               = "initial";
               document.getElementById("aff").style.display
               = "none";
                //                document.getElementById("demo").innerHTML = Reformulation.FullNom.apply(personne);
            }
        </script>
    </body>
</html>