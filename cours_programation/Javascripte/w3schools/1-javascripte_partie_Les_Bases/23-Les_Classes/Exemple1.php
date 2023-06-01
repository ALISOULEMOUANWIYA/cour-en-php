<! DOCTYPE html>
<html>
    <style>
        #aff{
            display: none;
        }
    </style>
    <body>
        
        <h2> Classe JavaScript </h2>

        <p> Comment utiliser une classe JavaScript. </p>
        <p id = "demo"> </p>
        <p id = "demo1"> </p>
        <p id = "demo2"> </p>
        <p id = "demo3"> </p>
        <p id = "demo4"> </p>
        <p id = "demo5"> </p>
        <p id = "demo6"> </p>
        <p id = "demo7"> </p>
        <p id = "demo8"> </p>
        
        <script>
            "use strict";
            var afficher;
            var Programmeur;
            var Nationaliter;
            class travaille {
                constructor(Programmeur, Nationaliter){
                    this.Programmeur = Programmeur;
                    this.Nationaliter = Nationaliter;
                }
                // fonction de flacher
                afficher = () => {
                    var personne = {
                        Nom:"John",
                        Prenom:"Doe",
                        Id:5566
                    }
                    var Reformulation = {
                        FullNom : function(){
                          return(this.Nom+" "+this.Prenom);   
                        }
                    }
                    return(Reformulation.FullNom.call(personne));
                }
            }
            var SatuPers = new travaille("Programmeur", "Comorien");
            document.getElementById("demo").innerHTML = SatuPers.afficher()+" est un "+SatuPers.Programmeur+" de Nationalité "+SatuPers.Nationaliter;
        </script>
    </body>
</html>