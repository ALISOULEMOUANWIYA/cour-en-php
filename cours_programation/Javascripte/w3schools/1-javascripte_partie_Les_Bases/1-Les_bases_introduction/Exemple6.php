<!doctype html>
<html>    
    <body>
        <h2>Que peut faire javaScipt </h2>
        <script>
            //lire un fichier javascripte avant le demarage de header
            window.onload = function() {
              var element = document.createElement("script");
              element.src = "myScript.js";
              document.body.appendChild(element);
            };
        </script>
    </body>    
</html>