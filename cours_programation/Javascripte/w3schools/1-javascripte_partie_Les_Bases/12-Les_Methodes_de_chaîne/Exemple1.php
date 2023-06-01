<!doctype html>
<html>     
    <body>
        <h2> Méthodes de chaîne JavaScript </h2>

        <p> La méthode indexOf() renvoie la position de la première occurrence d'un texte spécifié: </p>
        
        <p id="demo1"></p>
        <script>
            var txt = "Veuillez localiser où 'localiser' se produit!";
            var Textes = txt.indexOf("localiser");
            document.getElementById("demo1").innerHTML = Textes; 
        </script>
    </body>    
</html>