<! DOCTYPE html>
<html>
    <body>

    <h2> JavaScript Array.some() </h2>

    <p> La méthode some () vérifie si certaines valeurs de tableau passent un test. </p>

    <p id = "demo"> </p>

        <script>
            var nombres1 = [45, 4, 9, 16, 25];
            var nombres2 = nombres1.some(maFonction);

            document.getElementById ("demo").innerHTML = nombres2;

            function maFonction(valeur, index, tableau) {
//            function maFonction (total, valeur) {
               return(valeur > 18);
            }
        </script>

    </body>
</html>