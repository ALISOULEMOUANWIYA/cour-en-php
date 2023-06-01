<!doctype html>
<html>     
    <body>
        <h2> Méthodes de chaîne JavaScript </h2>

        <p></p>
        
        <p id="demo1"></p>
        <p id="demo2"></p>
        <p id="demo3"></p>
        <p id="demo4"></p>
        <script>
            /*
                Number(): Renvoie un nombre, converti à partir de son argument.
                
                parseFloat(): Analyse son argument et renvoie un nombre à virgule flottante
                
                parseInt(): Analyse son argument et retourne un entier
            */
            Number(true);          // returns 1
            Number(false);         // returns 0
            Number("10");          // returns 10
            Number("  10");        // returns 10
            Number("10  ");        // returns 10
            Number(" 10  ");       // returns 10
            Number("10.33");       // returns 10.33
            Number("10,33");       // returns NaN
            Number("10 33");       // returns NaN
            Number("John");        // returns NaN
            Number(new Date("2017-09-30"));    // returns 1506729600000
            /*-----------------------------*/
            parseInt("10");         // returns 10
            parseInt("10.33");      // returns 10
            parseInt("10 20 30");   // returns 10
            parseInt("10 years");   // returns 10
            parseInt("years 10");   // returns NaN
            
            /*-----------------------------------*/
            parseFloat("10");        // returns 10
            parseFloat("10.33");     // returns 10.33
            parseFloat("10 20 30");  // returns 10
            parseFloat("10 years");  // returns 10
            parseFloat("years 10");  // returns NaN
            
            /*
                MAX_VALUE: Renvoie le plus grand nombre possible en JavaScript

                MIN_VALUE: Renvoie le plus petit nombre possible en JavaScript

                POSITIVE_INFINITY: Représente l'infini (renvoyé en cas de dépassement de capacité)

                NEGATIVE_INFINITY : Représente l'infini négatif (renvoyé en cas de dépassement de capacité)

                NaN:  représente une valeur "Not-a-Number"
            */ 
           
            document.getElementById("demo1").innerHTML = Number.MAX_VALUE;
            document.getElementById("demo2").innerHTML = Number.MIN_VALUE;
            document.getElementById("demo3").innerHTML = Number.MAX_SAFE_INTEGER;
            document.getElementById("demo4").innerHTML = Number.MIN_SAFE_INTEGER;
        </script>
    </body>    
</html>