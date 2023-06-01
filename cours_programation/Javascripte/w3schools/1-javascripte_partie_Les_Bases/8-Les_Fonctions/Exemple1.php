<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <p id="demo1"></p>
        <script>
            function Monfonction(p1, p2){
                return p1*p2;
            }
            document.getElementById("demo1").innerHTML = Monfonction(2,8);
        </script>
    </body>    
</html>