<!doctype html>
<html>     
    <body>
        <h2> Méthodes de chaîne JavaScript </h2>

        <p> La méthode indexOf() renvoie la position de la première occurrence d'un texte spécifié: </p>
        
        <p id="demo1"></p>
        <script>
            var txt = "ALI, Soule, Mouanwiya";
//            var Textes = txt.substring(5, 10);
//            var Textes = txt.substr(5, 5);
//            var Textes = txt.substr(5);
            var Textes = txt.slice(-10);
            document.getElementById("demo1").innerHTML = Textes; 
        </script>
    </body>    
</html>