<!doctype html>
<html>     
    <body>
        <h2> Constructeur d'object</h2>
        <p> Ajout d'une méthode à un constructeur</p>
        <p>Votre fonction constructeur peut également définir des méthodes:</p>
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
                this.nationalite = "Comorien";
                this.name = function(){
                    return(this.nom+" "+this.prenom);
                }
            }
            var pers = new Personne( "Ali soule", "Mouanwiya", 27, "yeux")
            
            document.getElementById("demo").innerHTML = "je m'appel "+pers.name()+" de Nationalité "+pers.nationalite;
            
        </script>
    </body>    
</html>