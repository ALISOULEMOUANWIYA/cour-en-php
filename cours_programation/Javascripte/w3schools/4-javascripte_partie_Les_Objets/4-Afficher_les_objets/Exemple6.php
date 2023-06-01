<!doctype html>
<html>     
    <body>
        <h2> stringifier un tableau.</h2>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'user strict';
            var tableau = ["John","peter","Sally","Jane"];
            MonTableau = JSON.stringify(tableau);
            document.getElementById("demo").innerHTML = MonTableau;
        </script>
    </body>    
</html>