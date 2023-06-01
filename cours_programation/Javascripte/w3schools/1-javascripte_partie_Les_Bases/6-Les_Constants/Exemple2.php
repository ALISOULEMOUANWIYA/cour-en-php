<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <p id="demo1"></p>
        <script>
            //creation d'un objet
            const car = {type:"Fiat", model:"500", color:"white"};
            
            //changer un proprieter
             car.color = "red";
            
            // ajouter un proprieter
             car.owner = "Johnson";
            
            // afficher les proprieters
             document.getElementById("demo1").innerHTML = "Le propriétaire de la voiture est "+car.owner;
        </script>
    </body>    
</html>