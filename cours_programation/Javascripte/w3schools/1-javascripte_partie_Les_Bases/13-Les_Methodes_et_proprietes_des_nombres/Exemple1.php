<!doctype html>
<html>     
    <body>
        <h2> Méthodes de chaîne JavaScript </h2>

        <p></p>
        
        <p id="demo1"></p>
        <p id="demo2"></p>
        <p id="demo3"></p>
        <p id="demo4"></p>
        <p id="demo5"></p>
        <script>
            var x = 123; 
            //La méthode toString(): renvoie un nombre sous forme de chaîne.
           document.getElementById("demo1").innerHTML ="La méthode toString(): renvoie un nombre sous forme de chaîne<br>"+ x.toString()+"<br>"+
            (123).toString()+"<br>"+
            (100+23).toString(); 
            
           var y = 9.656;
            //toExponential() : renvoie une chaîne, avec un nombre arrondi et écrit en notation exponentielle.
           document.getElementById("demo2").innerHTML ="toExponential() : renvoie une chaîne, avec un nombre arrondi et écrit en notation exponentielle<br>"+ y.toExponential(0)+"<br>"+
            y.toExponential(2)+"<br>"+
            y.toExponential(4)+"<br>"+
            y.toExponential(6);
            
           //toFixed(): renvoie une chaîne, avec le nombre écrit avec un nombre spécifié de décimales:
           document.getElementById("demo3").innerHTML ="toFixed(): renvoie une chaîne, avec le nombre écrit avec un nombre spécifié de décimales:<br>"+ y.toFixed(0)+"<br>"+
            y.toFixed(2)+"<br>"+
            y.toFixed(4)+"<br>"+
            y.toFixed(6); 
            //toFixed(2): est parfait pour travailler avec de l'argent.
            
           
           //toPrecision(): renvoie une chaîne, avec un nombre écrit avec une longueur spécifiée:
         document.getElementById("demo4").innerHTML ="toPrecision(): renvoie une chaîne, avec un nombre écrit avec une longueur spécifiée:<br>"+ y.toPrecision()+"<br>"+
            y.toPrecision(2)+"<br>"+
            y.toPrecision(4)+"<br>"+
            y.toPrecision(6); 
            
           //valueOf(): renvoie un nombre sous forme de nombre.
            document.getElementById("demo5").innerHTML ="valueOf(): renvoie un nombre sous forme de nombre.<br>"+ x.valueOf()+"<br>"+
            (123).valueOf()+"<br>"+
            (100+23).valueOf();
            
            /*
                Number(): Renvoie un nombre, converti à partir de son argument.
                
                parseFloat(): Analyse son argument et renvoie un nombre à virgule flottante
                
                parseInt(): Analyse son argument et retourne un entier
            */
        </script>
    </body>    
</html>