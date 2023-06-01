<! DOCTYPE html>
<html>
    <body>

    <h2> JavaScript Array.map() </h2>

    <p>La méthode map () crée un nouveau tableau en exécutant une fonction sur chaque élément du tableau.

La méthode map () n'exécute pas la fonction pour les éléments de tableau sans valeurs.

La méthode map () ne modifie pas le tableau d'origine.</p>

    <p id = "demo"> </p>

        <script>
            var nombres1 = [45, 4, 9, 16, 25];
            var nombres2 = nombres1.map (maFonction);

            document.getElementById ("demo"). innerHTML = nombres2;

//            function maFonction (valeur, index, tableau) {
            function maFonction (valeur) {
               return valeur * 2;
            }
        </script>

    </body>
</html>