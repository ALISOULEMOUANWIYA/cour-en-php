<!doctype html>
<html>     
    <body>
        <h2>Cet exemple modifie une valeur de propriété:</h2>
        <p>Les fonctions JavaScript sont exécutées dans l'ordre dans lequel elles sont appelées. Pas dans l'ordre où ils sont définis.</p>

        <p>Cet exemple finira par afficher "Au revoir":</p>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'use strict';
            function MonDisplay(some){
                document.getElementById("demo").innerHTML=
                    some;
            }
            function MonPremier(){
                MonDisplay("Salut");
            }
            function MonSeconde(){
                MonDisplay("Au revoir");
            }
            MonPremier();
            MonSeconde();
        </script>
    </body>    
</html>