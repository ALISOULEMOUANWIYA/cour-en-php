<!doctype html>
<html>     
    <body>
        <h2> Fonctions JavaScript </h2>

        <p> Dans cet exemple, MaFonction est un constructeur de fonction: </p>
        <p id="demo"></p>
        <p id="demo1"></p>
        <script>
            'user strict';
            function MaFonction(arg1, arg2){
                this.Nom = arg1;
                this.Prenom = arg2;
            }
            var x = new MaFonction("John","Doe");
            document.getElementById("demo").innerHTML =
                x.Nom;
        </script>
    </body>    
</html>