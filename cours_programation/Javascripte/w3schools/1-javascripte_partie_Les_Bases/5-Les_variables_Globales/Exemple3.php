<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <h2>En dehors de MonFonction() NomVoiture n'est pas défini</h2>
        <p id="demo"></p>
        <p id="demo1"></p>
        <script>
            var pi = 3.14;
            var g = 9.81;
            MonFonction();
            function MonFonction(){ 
                let g = 10;
                var pi = 3.145 ;
                document.getElementById("demo").innerHTML = g+"----"+pi;
            }
            document.getElementById("demo1").innerHTML = g+"----"+pi;
        </script>
    </body>    
</html>