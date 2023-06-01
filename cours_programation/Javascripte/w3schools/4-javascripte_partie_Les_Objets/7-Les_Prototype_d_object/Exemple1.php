<!doctype html>
<html>     
    <body>
        <h2> Tous les objets JavaScript héritent des propriétés et des méthodes d'un prototype.</h2>
        <p>La propriété prototype JavaScript vous permet d'ajouter de nouvelles propriétés aux constructeurs d'objets:</p>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'user strict';
            // Fonction constructeur pour les objets Person
            function Personne(nom, prenom, age, yeux){
                this.nom = nom;
                this.prenom = prenom;
                this.Age = age;
                this.yeux = yeux;
            }
            // ajout d'un properties d'object
            Personne.prototype.Nationalite = "Comorien";
            
            var pers = new Personne( "Ali soule", "Mouanwiya", 27, "yeux");
            
            document.getElementById("demo").innerHTML = "je m'appele "+pers.nom+" de nationalité "+pers.Nationalite;
        </script>
    </body>    
</html>