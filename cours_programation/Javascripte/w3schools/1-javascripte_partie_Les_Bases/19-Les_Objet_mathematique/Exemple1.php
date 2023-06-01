<! DOCTYPE html>
<html>
    <body>
        <button onmouseover="actualiserDate()">Actualiser</button>
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
            /*
                Math.round(x) Renvoie x arrondi à son entier le plus proche;
                
                Math.ceil(x) Renvoie x arrondi à son entier le plus proche;
                
                Math.floor(x) Renvoie x arrondi à l'entier inférieur le plus proche;
                
                Math.trunc(x) Renvoie la partie entière de x (nouveau dans ES6);
                
                Math.sign(x): renvoie si x est négatif, nul ou positif:
                
                Math.pow(x, y): renvoie la valeur de x à la puissance de y:
                
                Math.sqrt(x): renvoie la racine carrée de x:
            */
            document.getElementById("demo").innerHTML = "Ciel : "+ Math.ceil(4.4);
            document.getElementById("demo2").innerHTML = "Floor : "+ Math.floor(4.4);
            document.getElementById("demo3").innerHTML = "round : "+ Math.round(4.4);
            document.getElementById("demo4").innerHTML = "trunc : "+ Math.trunc(4.4);
            document.getElementById("demo5").innerHTML = "trunc : "+ Math.sign(4.4);
            document.getElementById("demo6").innerHTML = "trunc : "+ Math.pow(2, 4);
            document.getElementById("demo7").innerHTML = "trunc : "+ Math.sqrt(4.4);
            document.getElementById("demo8").innerHTML = "trunc : "+ Math.abs(4.4);
        </script>
    </body>
</html>