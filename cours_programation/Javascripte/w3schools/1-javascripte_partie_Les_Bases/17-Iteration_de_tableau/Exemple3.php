<! DOCTYPE html>
<html>
    <body>

    <h2> JavaScript Array.filter() </h2>

    <p> La méthode filter () crée un nouveau tableau avec des éléments de tableau qui réussit un test. </p>

    <p id = "demo"> </p>

        <script>
            var nombres1 = [45, 4, 9, 16, 25];
            var nombres2 = nombres1.filter(maFonction);

            document.getElementById ("demo").innerHTML = nombres2;

            function maFonction (valeur, index, tableau) {
//            function maFonction (valeur) {
               return valeur > 18;
            }
        </script>

    </body>
</html>