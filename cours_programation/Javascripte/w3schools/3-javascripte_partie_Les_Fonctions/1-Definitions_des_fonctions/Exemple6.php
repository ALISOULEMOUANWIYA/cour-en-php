<!doctype html>
<html>     
    <body>
        <h2>Fonctions de fleche </h2>
        <p id="demo"></p>
        <p id="demo1"></p>
        <script>
            'user strict';
            // ES5
            var y = function(x, y) {
              return x * y;
            }

            // ES6
            const x = (x, y) =>{ 
                return(x * y);
            }
            document.getElementById("demo").innerHTML= x(5, 5); 
            document.getElementById("demo1").innerHTML= y(5, 5); 
        </script>
    </body>    
</html>