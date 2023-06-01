<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <p id="demo1"></p>
        <p id="demo2"></p>
        <script>
            MaFonction();
            function MaFonction(){
                var NomVoiture = "Ferarie";
                document.getElementById("demo1").innerHTML = typeof NomVoiture +" "+NomVoiture;
            }
            document.getElementById("demo2").innerHTML = typeof NomVoiture;
        </script>
    </body>    
</html>