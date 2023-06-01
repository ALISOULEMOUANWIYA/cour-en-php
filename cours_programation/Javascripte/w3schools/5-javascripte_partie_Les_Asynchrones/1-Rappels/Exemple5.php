<!doctype html>
<html>     
    <body>
        <h2> Rappel JavaScript </h2>

        <p> Attendez 3 secondes (3000 millisecondes) pour que cette page change. </p>

        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'use strict';
            setTimeout(MonDisplay, 3000);
            function MonDisplay(some){
                if(isNaN(some)){
                    document.getElementById("demo").innerHTML=
                    some;
                }else{
                  if(!isNaN(some)){
                    document.getElementById("demo1").innerHTML=
                    some;   
                   }
                }
            }
            function MonCAlculateur(num1, Num2, Monrappel){
                let somme = num1 + Num2;
                Monrappel(somme);
            }
            function Indicateur(Monrappel){
                Monrappel("tu n'as que ça : ");
            }
            MonCAlculateur(7,2, MonDisplay);
//            Indicateur(MonDisplay);
        </script>
    </body>    
</html>