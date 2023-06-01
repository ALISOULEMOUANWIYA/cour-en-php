<!doctype html>
<html>     
    <body>
        <h2> Les Tableaux </h2>

        <p></p>
        
        <p id="demo1"></p>
        <script>
            var personne = ["ali", "Soule", "Mouanwiya"];
            var trier = personne.sort();
            var textes;
           textes = "<ul>";
            for(var i = 0; i<personne.length; i++){
              textes += "<li>"+personne[i]+"</li>";   
            }
           textes +="</ul>";
            document.getElementById("demo1").innerHTML= textes;
            
        </script>
    </body>    
</html>