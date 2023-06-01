<!doctype html>
<html>     
    <body>
        <h2>Les constants </h2>
        <p>Avec <b>var</b>, vous pouvez utiliser une variable avant qu'elle ne soit déclarée:</p>
        <p id="demo1"></p>
        <script>
            NomVoiture = "Ford";
            Couluer = "rouge";
            alert(NomVoiture);
             document.getElementById("demo1").innerHTML = Couluer;
            var NomVoiture;
            var Couluer;
        </script>
    </body>    
</html>