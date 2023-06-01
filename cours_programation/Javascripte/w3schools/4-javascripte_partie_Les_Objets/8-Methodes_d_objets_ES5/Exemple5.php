<!doctype html>
<html>     
    <body>
        <h2>Cet exemple modifie une valeur de propriété:</h2>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'user strict';
            /*
                writable: true // La valeur de la propriété peut être modifiée
                
                enumerable: true // La propriété peut être énumérée
                
                configurable: true // La propriété peut être reconfigurée
            */
            // Fonction constructeur pour les objets Person
            var personne = {
                nom : " ALI soule",
                prenom : "Mouanwiya",
                age : 28,
                yeux : "Noir"
            };
            // Changer une propriété
            Object.defineProperty(personne, "NAtionalite", {value :"Comorien"});
            document.getElementById("demo").innerHTML = "je m'appele "+personne.nom+" j'ai "+personne.age+" et je suis de nationalité "+personne.NAtionalite;
        </script>
    </body>    
</html>