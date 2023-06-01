<! DOCTYPE html>
<html>
    <style>
        #aff{
            display: none;
        }
    </style>
    <body>
        
        <h2> JSON </h2>

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
            var text = '{"employe":['+
                       ' {"Nom":"John","Prenom":"Doe"},' +
                       ' {"Nom":"Anne","Prenom":"Smith"},' +
                       ' {"Nom":"Peter","Prenom":"Jones"}]}' ;
//            var text = '{"employees":[' +
//                       '{"firstName":"John","lastName":"Doe" },' +
//                       '{"firstName":"Anna","lastName":"Smith" },' +
//                       '{"firstName":"Peter","lastName":"Jones" }]}';
            var obj = JSON.parse(text);
            document.getElementById('demo').innerHTML = obj.employe[1].Nom+" "+obj.employe[1].Prenom;
        </script>
    </body>
</html>