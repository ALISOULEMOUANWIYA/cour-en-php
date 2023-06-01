<!doctype html>
<html>     
    <body>
        <h2> Méthodes de chaîne JavaScript </h2>

        <p> La méthode padStart() remplit une chaîne avec une autre chaîne: </p>
        
        <p id="demo1"></p>
        <script>
         let str = "5";
//            str = str.padStart(4, 0);
            str = str.padEnd(4, 0);
         document.getElementById("demo1").innerHTML = str; 
        </script>
    </body>    
</html>