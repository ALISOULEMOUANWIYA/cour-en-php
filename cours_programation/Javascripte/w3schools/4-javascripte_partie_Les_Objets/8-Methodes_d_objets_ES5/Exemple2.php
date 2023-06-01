<!doctype html>
<html>     
    <body>
        <h2>Modification d'une valeur de propriété</h2>
        <p> Changer une propriété</p>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
//            'user strict';
            // Fonction constructeur pour les objets Person
            var personne = {
                nom : " ALI soule",
                prenom : "Mouanwiya",
                age : 28,
                yeux : "Noir"
            };
            // ajout d'un properties d'object
            Object.defineProperty(personne, "age", {value :25});
            document.getElementById("demo").innerHTML = "je m'appele "+personne.nom+" j'ai "+personne.age;
        </script>
    </body>    
</html>