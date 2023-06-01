<!doctype html>
<html>     
    <body>
        <p>Mauvaise pratique</p>
        <p id="demo"></p>
        <p id="demo1"></p>
        <script>
            'user strict';
            var x = MaFonction();
            
            function MaFonction(){
                return(this);
            }
            document.getElementById("demo").innerHTML =
                x;
        </script>
    </body>    
</html>