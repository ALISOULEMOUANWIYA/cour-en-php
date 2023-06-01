<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <p id="demo"></p>
        <script>
            var NomVoiture ;
            var resultat;
            NomVoiture = function(a, b){ 
               return(a * b);
            }
           resultat = NomVoiture(3, 8);
          document.getElementById("demo").innerHTML = resultat;
        </script>
    </body>    
</html>