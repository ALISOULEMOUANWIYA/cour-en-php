<!doctype html>
<html>     
    <body>
        <h2>Les Operateurs </h2>
        <p id="demo1"></p>
        <p id="demo2"></p>
        <p id="demo3"></p>
        <p id="demo4"></p>
        <p id="demo5"></p>
        <script>
            var x = 2;
            var y = 8;
            var z = x + y;
             document.getElementById("demo1").innerHTML = "Addition : "+x+" + "+y+" = "+z;
                z = x - y;
             document.getElementById("demo2").innerHTML = "Soustraction : "+x+" - "+y+" = "+z;
                z = x*y; 
             document.getElementById("demo3").innerHTML = "Multiplication : "+x+" * "+y+" = "+z;
                z = x/y;
             document.getElementById("demo4").innerHTML = "Division  : "+x+" / "+y+" = "+z;
                z = x % y;
             document.getElementById("demo5").innerHTML = "Modulo : "+x+" % "+y+" = "+z;

        </script>
    </body>    
</html>