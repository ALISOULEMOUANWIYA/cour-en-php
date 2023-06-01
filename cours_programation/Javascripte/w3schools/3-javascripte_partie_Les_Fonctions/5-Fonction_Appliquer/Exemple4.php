<!doctype html>
<html>     
    <body>
        <h2> Fonctions JavaScript </h2>
        
        <p id="demo"></p>
        <p id="demo1"></p>
        <script>
            'user strict';
            
            document.getElementById("demo").innerHTML =
                Math.max.apply(null,[1,2,3]);
        </script>
    </body>    
</html>