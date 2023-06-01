<!doctype html>
<html>     
    <body>
        <h2> Fonctions JavaScript </h2>
        
        <p id="demo"></p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'user strict';
            var conteur = 0;
            
            function ajouter(){
                conteur +=1;
            }
            
            ajouter();
            ajouter();
            ajouter();
            // conteur = 3;
            document.getElementById("demo").innerHTML = conteur;
        </script>
    </body>    
</html>