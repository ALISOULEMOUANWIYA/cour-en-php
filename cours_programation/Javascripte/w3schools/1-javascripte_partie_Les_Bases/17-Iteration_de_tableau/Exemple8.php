<! DOCTYPE html>
<html>
    <body>

    <h2> JavaScript Array.some() </h2>

    <p> La méthode indexOf () recherche dans un tableau une valeur d'élément et renvoie sa position. </p>
    <p> Array.lastIndexOf () est identique à Array.indexOf (), mais renvoie la position de la dernière occurrence de l'élément spécifié. </p>

    <p id = "demo"> </p>
    <p id = "demo1"> </p>

        <script>
            var nombres1 = [45, 4, 9, 16, 25];
            var nombres2 = nombres1.indexOf(16);
            var nombres3 = nombres1.lastIndexOf(16);

            document.getElementById ("demo").innerHTML = nombres2;
            document.getElementById ("demo1").innerHTML = nombres3;

        </script>

    </body>
</html>