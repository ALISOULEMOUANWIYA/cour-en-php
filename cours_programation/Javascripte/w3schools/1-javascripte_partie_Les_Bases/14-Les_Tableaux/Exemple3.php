<!doctype html>
<html>     
    <body>
        <h2> Les Tableaux </h2>

        <p></p>
        
        <p id="demo1"></p>
        <script>
            var personne = ["ali", "Soule", "Mouanwiya"];
            personne.push("Rachnele Keyz");
            var trier = personne.sort();
            var textes;
           textes = "<ul>";
            personne.forEach(MaFonction);
           textes +="</ul>";
           document.getElementById("demo1").innerHTML= textes;
           function MaFonction(valeur){
               textes += "<li>"+valeur+"</li>";
           } 
            
        </script>
    </body>    
</html>