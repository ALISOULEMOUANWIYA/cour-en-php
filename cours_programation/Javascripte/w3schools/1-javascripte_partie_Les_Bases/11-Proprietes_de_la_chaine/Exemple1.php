<!doctype html>
<html>     
    <body>
        <h2>Propriétés de la chaîne JavaScript </h2>
        <p>La propriété length renvoie la longueur d'une chaîne:</p>
        <p id="demo1"></p>
        <script>
            var txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            var longueurText = txt.length;
            document.getElementById("demo1").innerHTML = "cette chaine de Lettre alphabetique '"+txt+"' fait "+longueurText+" Lettres"; 
        </script>
    </body>    
</html>