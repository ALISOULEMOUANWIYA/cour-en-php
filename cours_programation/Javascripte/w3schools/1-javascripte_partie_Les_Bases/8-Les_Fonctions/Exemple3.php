<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <p id="demo1"></p>
        <script>
            function toCelsuis(faherenheit){
                return(faherenheit+" faherenheit = "+((5/9) * (faherenheit-32))+" °C");
            }
//            var temperature = toCelsuis(12);
//            document.getElementById("demo1").innerHTML = temperature;
            /*
              Attantion :
              ---------
                Accéder à une fonction sans () renverra la définition de la fonction au lieu du résultat de la fonction:
            */
            document.getElementById("demo1").innerHTML = toCelsuis(12);
        </script>
    </body>    
</html>