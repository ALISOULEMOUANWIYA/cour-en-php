<!doctype html>
<html>     
    <body>
        <h2> Méthodes de chaîne JavaScript </h2>

        <p> La méthode charAt() renvoie le caractère à une position donnée dans une chaîne: </p>
        
        <p id="demo1"></p>
        <script>
         let str = "Ali soule";
//         str = str.charAt(0); // return A
//         str = str.charCodeAt(0); // return 65
         str = str[0]; // return A
         document.getElementById("demo1").innerHTML = str; 
        </script>
    </body>    
</html>