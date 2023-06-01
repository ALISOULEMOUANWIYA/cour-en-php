<!doctype html>
<html>     
    <body>
        <h2>Les constants </h2>
        <p>Déclarer un tableau constant ne rend PAS les éléments immuables:</p>
        <p id="demo1"></p>
        <script>
            //creation d'un tableau
            const car = ["BMW", "Audo", "Tesla", "Ferari"];
            
            //changer un proprieter
             car[1] = "Mercedesse";
            
            // ajouter un proprieter
             car.push = "Laborguini";
            
            // afficher les proprieters
             document.getElementById("demo1").innerHTML = car;
        </script>
    </body>    
</html>