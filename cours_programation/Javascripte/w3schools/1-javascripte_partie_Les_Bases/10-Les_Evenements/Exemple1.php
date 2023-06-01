<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <p id="demo1"></p>
        <p id="demo2"></p>
        <button onclick="AfficherDate()">le temps est</button>
        <script>
            document.getElementById("demo1").innerHTML = "La date d'ajourd'huit est "; 
            function AfficherDate(){
             document.getElementById("demo2").innerHTML = Date();   
            }
            
            /*
            Description de l'évenement:
            --------------------------
            onchange : Un élément HTML a été modifié
            onclick L'utilisateur clique sur un élément HTML;
            onmouseover : L'utilisateur déplace la souris sur un élément HTML;
            onmouseout : L'utilisateur éloigne la souris d'un élément HTML;
            onkeydown : L'utilisateur appuie sur une touche du clavier;
            onload :  Le navigateur a fini de charger la page
            */
        </script>
    </body>    
</html>