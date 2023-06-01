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
                var conteur = 0;
                function tour(){
                    conteur +=1;
                }
                tour();
                return(conteur);
            }
            document.getElementById("demo").innerHTML = "conteur = "+conteur + " ajouter = "+ajouter();
        </script>
    </body>    
</html>