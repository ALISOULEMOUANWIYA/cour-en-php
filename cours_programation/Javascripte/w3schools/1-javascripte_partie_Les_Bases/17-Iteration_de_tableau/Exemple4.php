<! DOCTYPE html>
<html>
    <body>

    <h2> JavaScript Array.reduce() </h2>

    <p> La méthode reduction () exécute une fonction sur chaque élément du tableau pour produire (réduire à) une valeur unique.

La méthode reduction () fonctionne de gauche à droite dans le tableau. Voir aussi reductionRight (). </p>

    <p id = "demo"> </p>

        <script>
            var nombres1 = [45, 4, 9, 16, 25];
            var nombres2 = nombres1.reduce(maFonction);

            document.getElementById ("demo").innerHTML = nombres2;

            function maFonction (totale,valeur, index, tableau) {
//            function maFonction (total, valeur) {
               return(valeur + totale);
            }
        </script>

    </body>
</html>