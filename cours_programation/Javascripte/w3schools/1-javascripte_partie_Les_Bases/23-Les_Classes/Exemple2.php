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
        <button type="button" onclick="SatuPers.Cliquer()" id="style">afficher</button>
        <button type="button" onclick="SatuPers.Masquer()" id="aff" >Masquer</button>
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
            var year;
            var age;
            class travaille {
                constructor(Programmeur, Nationaliter, year){
                    this.Programmeur = Programmeur;
                    this.Nationaliter = Nationaliter;
                    this.year = year;
                }
                // fonction de flacher
                afficher = () => {
                    var personne = {
                        Nom:"Ali Soule",
                        Prenom:"Mouanwiya",
                        Id:5566
                    }
                    var Reformulation = {
                        FullNom : function(){
                          return(this.Nom+" "+this.Prenom);   
                        }
                    }
                    return(Reformulation.FullNom.call(personne));
                }
                age = (y) =>{
                    return(y - this.year)
                }
                Cliquer(){
                    var date = new Date();
                    var dates = date.getFullYear();
                    var ageper =this.age(dates);
                    document.getElementById("demo").innerHTML = this.afficher()+" agé de "+ageper+", est un "+this.Programmeur+" de nationalité "+this.Nationaliter; 
                    document.getElementById("demo").style.display = "initial";
                    document.getElementById("style").style.display
                       = "none";
                    document.getElementById("aff").style.display
                       = "initial";
                }
            
                Masquer(){
                   document.getElementById("demo").style.display = "none"; 
                   document.getElementById("style").style.display
                   = "initial";
                   document.getElementById("aff").style.display
                   = "none";
                }
            }
            var SatuPers = new travaille("Programmeur", "Comorien",1996);
        </script>
    </body>
</html>