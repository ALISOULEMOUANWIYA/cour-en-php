<! DOCTYPE html>
<html>
    <body>

    <h2> JavaScript Array.reduce() </h2>

    <p> Crée un nouveau tableau en exécutant une fonction sur chaque élément du tableau. </p>

    <p id = "demo"> </p>

        <script>
            var nombres1 = [45, 4, 9, 16, 25];
            var nombres2 = nombres1.reduceRight(maFonction);

            document.getElementById ("demo").innerHTML = nombres2;

            function maFonction (totale,valeur, index, tableau) {
//            function maFonction (total, valeur) {
               return(valeur + totale);
            }
        </script>

    </body>
</html>