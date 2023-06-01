<!doctype html>
<html>     
    <body>
        <h2>Fonctions de fleche </h2>
        <p id="demo"></p>
        <p id="demo1"></p>
        <script>
            'user strict';
            function MaFonction(x, y){
                if(y===undefined){
                    y = 2;
                }
                return(x * y);
            }
            document.getElementById("demo").innerHTML =
                MaFonction(2);
        </script>
    </body>    
</html>