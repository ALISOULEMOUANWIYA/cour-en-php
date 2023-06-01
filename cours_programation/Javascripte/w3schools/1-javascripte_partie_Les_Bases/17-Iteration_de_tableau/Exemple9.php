<! DOCTYPE html>
<html>
    <body>

    <h2> JavaScript Array.some() </h2>

    <p> La méthode find () renvoie la valeur du premier élément du tableau qui passe une fonction de test. </p>

    <p id = "demo"> </p>
    <p id = "demo1"> </p>

        <script>
            var nombres1 = [45, 4, 9, 16, 25];
            var nombres2 = nombres1.find(MaFonction);

            document.getElementById ("demo").innerHTML = nombres2;
            function MaFonction(value, inde, array){
                return(value > 18);
            }
        </script>
    </body>
</html>