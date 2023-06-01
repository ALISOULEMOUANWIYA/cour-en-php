<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <p id="demo1"></p>
        <script>
            var personne = {
                Nom : "Ali Soule",
                Prenom : "Mouanwiya",
                Nationalite : "Comorien",
                Metier : "Programmeur"
            }
//            document.getElementById("demo1").innerHTML = "Je m'appel "+personne.Nom+" "+personne.Prenom+" de nationalité "+personne.Nationalite;
            document.getElementById("demo1").innerHTML = "Je m'appel "+personne["Nom"]+" "+personne["Prenom"]+" de nationalité "+personne["Nationalite"];
        </script>
    </body>    
</html>