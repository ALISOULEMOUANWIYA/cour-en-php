<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <h2>En dehors de MonFonction() NomVoiture n'est pas défini</h2>
        <p id="demo"></p>
        <p id="demo1"></p>
        <script>
            MonFonction();
            function MonFonction(){ 
                var NomVoiture = "Clio" ;
                document.getElementById("demo").innerHTML = typeof NomVoiture+" "+NomVoiture;
            }
            document.getElementById("demo1").innerHTML = typeof NomVoiture;
        </script>
    </body>    
</html>