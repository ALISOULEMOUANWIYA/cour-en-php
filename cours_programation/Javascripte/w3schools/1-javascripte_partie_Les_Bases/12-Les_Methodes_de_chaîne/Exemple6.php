<!doctype html>
<html>     
    <body>
        <h2> Méthodes de chaîne JavaScript </h2>

        <p> La méthode indexOf() renvoie la position de la première occurrence d'un texte spécifié: </p>
        
        <p id="demo1"></p>
        <script>
            var txt = "ALI Soule Mouanwiya";
//            var txt = "ALI Soule Mouanwiya et Rachnel keyz";
//            var Textes = txt.replace("Mouanwiya", "Rachnel Keyz");
            //il ne marchera pas en raison de police
//            var Textes = txt.replace("MOUANWIYA", "Rachnel Keyz");
//            var Textes = txt.replace(/MOUANWIYA/i, "Rachnel Keyz");
            var Textes = txt.replace(/Mouanwiya/g, "Rachnel Keyz");
            document.getElementById("demo1").innerHTML = Textes; 
        </script>
    </body>    
</html>