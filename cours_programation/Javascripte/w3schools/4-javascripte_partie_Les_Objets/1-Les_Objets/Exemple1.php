<!doctype html>
<html>     
    <body>
        <h2> Fonctions JavaScript </h2>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'user strict';
            var personne = {
              Nom : "Ali soule",
              Prenom : "Mouanwiya",
                age : 27,
                coleuryeux : "Noir"
            };
            document.getElementById("demo").innerHTML = personne.Nom+" "+personne.Prenom;
        </script>
    </body>    
</html>