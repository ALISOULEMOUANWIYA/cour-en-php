<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <p id="demo1"></p>
        <script>
            function Monfonction(x, y){
                return x*y;
            }
            var z = Monfonction(2,8);
            document.getElementById("demo1").innerHTML = z;
        </script>
    </body>    
</html>