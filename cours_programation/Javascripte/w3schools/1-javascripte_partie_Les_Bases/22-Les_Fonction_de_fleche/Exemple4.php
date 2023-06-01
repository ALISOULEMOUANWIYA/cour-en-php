<! DOCTYPE html>
<html>
    <style>
        #aff{
            display: none;
        }
    </style>
    <body>
        
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
            Salutation = (Valeur) => "Bonjour , "+Valeur;
            document.getElementById("demo").innerHTML = Salutation("Tu vas biens ?");
        </script>
    </body>
</html>