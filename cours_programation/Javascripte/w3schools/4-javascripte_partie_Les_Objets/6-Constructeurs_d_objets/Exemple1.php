<!doctype html>
<html>     
    <body>
        <h2> Constructeur d'object</h2>
        <p> Vous ne pouvez PAS ajouter une nouvelle propriété à une fonction constructeur</p>
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
        // Vous ne pouvez PAS ajouter une nouvelle propriété à une fonction constructeur
            //Ajout d'une propriété à un constructeur
            Personne.Langue = "Comorien";
            var pers = new Personne( "Ali soule", "Mouanwiya", 27, "yeux")
            
            document.getElementById("demo").innerHTML = "je m'appel "+pers.nom+" "+pers.prenom;
            
            //Ajout d'une propriété l'objet pers
            pers.Nationalite = "Comorien";
            
            document.getElementById("demo1").innerHTML = "je m'appel "+pers.nom+" "+pers.prenom+"   de Nationalité "+pers.Nationalite;
            
            //Ajout d'une méthode à un objet
            pers.name = function(){
                return(this.nom+" "+this.prenom);
            }
            
            document.getElementById("demo3").innerHTML = "je m'appel "+pers.name();
            
            //Ajout d'une propriété à un constructeur
            Personne.Langue = "Comorien";
            document.getElementById("demo3").innerHTML = "je m'appel "+pers.name()+" de langue "+pers.Langue;
        </script>
    </body>    
</html>