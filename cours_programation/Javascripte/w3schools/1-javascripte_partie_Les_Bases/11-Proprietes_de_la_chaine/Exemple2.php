<!doctype html>
<html>     
    <body>
        <h2>Chaînes JavaScript</h2>
        <p>La séquence d'échappement \ "insère un guillemet double dans une chaîne.</p>
        <p id="demo1"></p>
        <script>
            var txt = "We are the so-called \"Vikings\" from the north.";
            document.getElementById("demo1").innerHTML = txt; 
            /*
                \b Retour arrière
                \f Form Feed
                \n Nouvelle ligne
                \r Retour chariot
                \t Tabulateur horizontal
                \v Tabulateur vertical
            */
        </script>
    </body>    
</html>