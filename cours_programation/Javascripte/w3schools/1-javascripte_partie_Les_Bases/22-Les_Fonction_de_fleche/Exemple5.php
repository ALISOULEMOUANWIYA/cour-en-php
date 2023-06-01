<! DOCTYPE html>
<html>
    <style>
        #aff{
            display: none;
        }
    </style>
    <body>
        <button id="btn"> clique moi</button>
        <p id = "demo"> </p>
        <p id = "demo1"> </p>
        <p id = "demo2"> </p>
        <p id = "demo3"> </p>
        <p id = "demo4"> </p>
        <p id = "demo5"> </p>
        <p id = "demo6"> </p>
        <p id = "demo7"> </p>
        <p id = "demo8"> </p>
        
        <script>
            "use strict";
            var Salutation;
            Salutation = () =>{
                document.getElementById("demo").innerHTML += this;
            }
            // L'objet window appelle la fonction:
                window.addEventListener("load", Salutation);
            // Un objet bouton appelle la fonction:
                document.getElementById("btn").addEventListener("click", Salutation);
        </script>
    </body>
</html>