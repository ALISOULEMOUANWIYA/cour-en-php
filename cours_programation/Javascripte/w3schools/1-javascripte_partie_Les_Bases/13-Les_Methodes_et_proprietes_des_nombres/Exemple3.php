<!doctype html>
<html>     
    <body>
        <h2> Méthodes de chaîne JavaScript </h2>

        <p></p>
        
        <p id="demo1"></p>
        <p id="demo2"></p>
        <p id="demo3"></p>
        <p id="demo4"></p>
        <p id="demo5"></p>
        <p id="demo6"></p>
        <script>
            /*
                MAX_VALUE: Renvoie le plus grand nombre possible en JavaScript

                MIN_VALUE: Renvoie le plus petit nombre possible en JavaScript

                POSITIVE_INFINITY: Représente l'infini (renvoyé en cas de dépassement de capacité)

                NEGATIVE_INFINITY : Représente l'infini négatif (renvoyé en cas de dépassement de capacité)

                NaN:  représente une valeur "Not-a-Number"
            */ 
           
            document.getElementById("demo1").innerHTML = Number.MAX_VALUE;
            document.getElementById("demo2").innerHTML = Number.MIN_VALUE;
            document.getElementById("demo3").innerHTML = Number.MAX_SAFE_INTEGER;
            document.getElementById("demo4").innerHTML = Number.MIN_SAFE_INTEGER;
            
             document.getElementById("demo5").innerHTML = Number.POSITIVE_INFINITY;
             document.getElementById("demo6").innerHTML = Number.NEGATIVE_INFINITY;
        </script>
    </body>    
</html>