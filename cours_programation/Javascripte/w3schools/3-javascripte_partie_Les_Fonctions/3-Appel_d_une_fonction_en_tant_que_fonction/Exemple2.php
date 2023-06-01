<!doctype html>
<html>     
    <body>
        <h2>Les fonctions globales deviennent automatiquement des méthodes de fenêtre. L'appel de myFunction () est identique à l'appel de window.myFunction (). </h2>
        <p>C'est une manière courante d'appeler une fonction JavaScript, mais ce n'est pas une très bonne pratique.
Les variables, méthodes ou fonctions globales peuvent facilement créer des conflits de noms et des bogues dans l'objet global.</p>
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
                window.MaFonction(1, 123);
        </script>
    </body>    
</html>