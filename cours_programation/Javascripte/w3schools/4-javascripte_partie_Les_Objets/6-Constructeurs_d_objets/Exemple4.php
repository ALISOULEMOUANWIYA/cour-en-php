<!doctype html>
<html>     
    <body>
        <h2> Constructeur d'object</h2>
        <p> Vous ne pouvez pas ajouter une nouvelle méthode à un constructeur d'objet de la même manière que vous ajoutez une nouvelle méthode à un objet existant.</p>
        <p>L'ajout de méthodes à un constructeur d'objet doit être effectué à l'intérieur de la fonction constructeur:</p>
        <p>La fonction changeName() attribue la valeur de name à la propriété lastName de la personne.</p>
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
                this.Changement = function(name){
                    this.nom = name;
                }
            }
            var pers = new Personne( "Ali soule", "Mouanwiya", 27, "yeux");
             //changer le Nom 
            pers.Changement("Moussa")
            document.getElementById("demo").innerHTML = "je m'appel "+pers.nom+" de Nationalité "+pers.nationalite;
            
        </script>
    </body>    
</html>