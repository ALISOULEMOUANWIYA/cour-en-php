<!doctype html>
<html> 
    <style>
        .cadre{
            position: relative;
            top: 250px;
            left: 120px;
            width: 220px;
            height: 60px;
            background: #ccc;
            margin: 0px 5px;
            border-radius: 10px;
            border-left-style: groove;
            border-right-style: groove;
            box-shadow: 5px 5px 2px 1px rgba(0, 0, 255, .2);
            transition: 0.5s;
        }
        .cadre:hover{
            border-color: black;
        }
        #demo{
            position: relative;
            top: 30%;
            left: 8px;
            font-size: 20px;
            font-weight: bold;
            color: darkslategrey;
        }
    </style>
    <body>
        <h2> Asynchroniseret Attendre </h2>
        <div class="cadre">
            <div id="demo">0</div>
        </div>
        <script>
            'use strict';
            function MonDisplaye(somme){
                document.getElementById("demo").innerHTML =
                somme;
            }
            async function MaFonction(){
                return("Salut je suis Ali Soule !!");
            }
            MaFonction().then(
                function(Valeur){
                  MonDisplaye(Valeur);  
                },
                function(erreur){
                    MonDisplaye(erreur);
                }
            );
        </script>
    </body>    
</html>