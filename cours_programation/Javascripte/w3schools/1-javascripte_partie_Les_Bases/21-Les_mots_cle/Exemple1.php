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
            function Cliquer(){
                var personne ={
                    Nom:"John",
                    Prenom:"Doe",
                    Id:5566,
                    FullNom: function(){
                        return(this.Nom+" "+this.Prenom);
                    }
                };
                document.getElementById("demo").innerHTML = personne.FullNom();
                document.getElementById("style").style.display="none";
            }
        </script>
    </body>
</html>