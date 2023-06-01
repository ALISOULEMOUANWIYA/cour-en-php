<!doctype html>
<html>     
    <body>
        <h2> Tableau JavaScript.forEach () </h2>

        <p> Appelle une fonction une fois pour chaque élément du tableau. </p>
        <p> La méthode forEach() appelle une fonction (une fonction de rappel) une fois pour chaque élément du tableau.</p>
        
        <p id="demo1"></p>
        <p id="demo2"></p>
        <p id="demo3"></p>
        <p id="demo4"></p>
        <p id="demo5"></p>
        <script> 
            var Nombre = [45, 4, 16, 25];
            var textes = "";
            Nombre.forEach(myFunction);
            document.getElementById("demo1").innerHTML = textes;
//            function myFunction(value, index, array) { 
            function myFunction(value) {
              textes += value + "<br>"; 
            }
        </script>
    </body>    
</html>