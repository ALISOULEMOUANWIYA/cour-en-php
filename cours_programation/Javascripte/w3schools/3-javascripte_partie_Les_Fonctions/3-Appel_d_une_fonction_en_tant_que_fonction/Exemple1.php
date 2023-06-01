<!doctype html>
<html>     
    <body>
        <h2>L'objet Arguments </h2>
        <p id="demo"></p>
        <p id="demo1"></p>
        <script>
            'user strict';
            var somme = 0;
            
            function MaFonction(a, b){
                for(var i = 0; i<arguments.length; i++){
                    if(arguments[i] > somme){
                        somme += arguments[i];
                    }
                }
                return(somme);
            }
            document.getElementById("demo").innerHTML =
                MaFonction(1, 123);
        </script>
    </body>    
</html>