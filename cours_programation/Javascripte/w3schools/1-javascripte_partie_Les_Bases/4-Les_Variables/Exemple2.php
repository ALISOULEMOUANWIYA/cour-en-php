<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <p id="demo"></p>
        <script>
            var NomVoiture = "Clio" ;
            MonFonction();
            function MonFonction(){ 
                document.getElementById("demo").innerHTML = "Je peut decrire LE "+NomVoiture;
            }
        </script>
    </body>    
</html>