<!doctype html>
<html>     
    <body>
        <h2> Les Tableaux </h2>

        
        <button onclick="Concatener()">Concatener les deux tableaux</button>
        
        <p id="demo1"></p>
        <p id="demo2"></p>
        <p id="demo3"></p>
        <p id="demo4"></p>
        <script>
            var personne = ["ali", "Soule", "Mouanwiya","Djoumoichongo"];
            var geolocalisation = ["Programmeur", "Niveaux Licence2", "Localisation","Dakare"];
            var passion = ["Musics Electronique", "soundTrack film"];
            var trier = personne.sort();
           
           function Affiche_Tableau(Tableau){
               return(Tableau);
           } 
           if(Array.isArray(personne) &&Array.isArray(geolocalisation)){
               document.getElementById("demo1").innerHTML= Affiche_Tableau(personne);
               document.getElementById("demo2").innerHTML= Affiche_Tableau(geolocalisation);
               document.getElementById("demo3").innerHTML= Affiche_Tableau(passion);
           }

            function Concatener(){
                var tableauFinale = personne.concat(geolocalisation,passion," je suis une partition");
         document.getElementById("demo4").innerHTML= Affiche_Tableau(tableauFinale);
            }
        </script>
    </body>    
</html>