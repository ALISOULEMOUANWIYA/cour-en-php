<!doctype html>
<html>     
    <body>
        <h3>Contrôle de séquence</h3>
        <p>Parfois, vous souhaitez avoir un meilleur contrôle sur le moment d'exécuter une fonction.</p>
        <p>Supposons que vous souhaitiez effectuer un calcul, puis afficher le résultat.</p>
        <p>Vous pouvez appeler une fonction de calcul (MonCAlculateur), enregistrer le résultat, puis appeler une autre fonction (MonDisplay) pour afficher le résultat:</p>

        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'use strict';
            function MonDisplay(some){
                document.getElementById("demo").innerHTML=
                    some;
            }
            function MonCAlculateur(num1, Num2){
                let somme = num1 + Num2;
                MonDisplay(somme);
            }
            MonCAlculateur(7,2);
        </script>
    </body>    
</html>