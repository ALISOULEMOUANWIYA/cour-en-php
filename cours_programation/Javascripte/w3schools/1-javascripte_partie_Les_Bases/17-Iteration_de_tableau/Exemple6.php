<! DOCTYPE html>
<html>
    <body>

    <h2> JavaScript Array.reduce() </h2>

    <p> La méthode every () vérifie si toutes les valeurs du tableau passent un test. </p>

    <p id = "demo"> </p>

        <script>
            var nombres1 = [45, 4, 9, 16, 25];
            var nombres2 = nombres1.every(maFonction);

            document.getElementById ("demo").innerHTML = nombres2;

            function maFonction (valeur, index, array) {
//            function maFonction (valeur) {
               return(valeur > 18);
            }
        </script>

    </body>
</html>