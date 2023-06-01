<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <h2>Une variable GLOBAL est accessible à partir de n'importe quel script ou fonction. </h2>
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