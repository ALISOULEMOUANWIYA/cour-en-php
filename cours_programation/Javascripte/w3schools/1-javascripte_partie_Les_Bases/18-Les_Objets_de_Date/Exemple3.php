<! DOCTYPE html>
<html>
    <body>
        <button onmouseover="actualiserDate()">Actualiser</button>
        <p id = "demo"> </p>
        <p id = "demo1"> </p>
        <p id = "demo2"> </p>
        <p id = "demo0"> : </p>
        <p id = "demo3"> </p>
        <p id = "demo4"> </p>
        <p id = "demo5"> </p>
        
        <script>
            /*
                setDate(): définir le jour sous forme de nombre (1-31)
                 setFullYear() Définit l'année (éventuellement le mois et le jour);
                
                 setHours(): Réglez l'heure (0-23);
                
                 setMilliseconds() Définit les millisecondes (0-999);
                
                 setMinutes(): Réglez les minutes (0-59);
                
                 setMonth(): Réglez le mois (0-11);
                
                 setSeconds() Définit les secondes (0-59);
                
                 setTime(): règle l'heure (en millisecondes depuis le 1er janvier 1970);
            */
            var dates = new Date();
            var Months =  ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var days =  ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            function actualiserDate(){
            document.getElementById ("demo").innerHTML = Months[dates.getMonth()]+" - "+days[dates.getDay()];  
            }
        </script>
    </body>
</html>