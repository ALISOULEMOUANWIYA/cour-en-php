<! DOCTYPE html>
<html>
    <body>
        <h2> JavaScript addEventListener () </h2>

        <p> Cet exemple utilise la méthode addEventListener() sur l'objet window. </p>
        
        <p id="demo"></p>


        <script>
            // resize = redimensionner
            window.addEventListener("resize",function(){
                document.getElementById("demo").innerHTML =Math.random();
            });
        </script>
    </body>
</html>