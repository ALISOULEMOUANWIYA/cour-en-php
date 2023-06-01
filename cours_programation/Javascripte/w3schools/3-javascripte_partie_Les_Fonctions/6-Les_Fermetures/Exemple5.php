<!doctype html>
<html>     
    <body>
        <h2> Fonctions JavaScript </h2>
        <p> Comptage avec une variable locale. </p>
        <button type="button" onclick="ajouter()">Ajouter</button>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'user strict';
            var conteur = 0;
            var tourner = (function(){
                var conteur = 0;
                return (function(){
                           conteur +=1;
                           return(conteur);
                        });
            })();
            function ajouter(){
                document.getElementById("demo").innerHTML = " ajouter = "+tourner();
            }
            (function(){
                document.getElementById("demo").innerHTML = " ajouter = "+tourner();
            })();
            
        </script>
    </body>    
</html>