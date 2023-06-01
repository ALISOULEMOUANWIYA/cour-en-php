<!doctype html>
<html>     
    <body>
        <h2> Fonctions JavaScript </h2>
        
        <p id="demo"></p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'user strict';
            
            document.getElementById("demo").innerHTML =Math.max.apply(Math, [1,2,3]);
            document.getElementById("demo1").innerHTML =Math.max.apply(" ", [1,2,3]);
            document.getElementById("demo3").innerHTML =Math.max.apply(0, [1,2,3]);
        </script>
    </body>    
</html>