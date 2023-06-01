<!doctype html>
<html>     
    <body>
        <h2>Fonctions d'auto-appel </h2>
        <p id="demo"></p>
        <script>
            'user strict';
            (function(){
             document.getElementById("demo").innerHTML="Salut mon frere !";   
            })();
        </script>
    </body>    
</html>