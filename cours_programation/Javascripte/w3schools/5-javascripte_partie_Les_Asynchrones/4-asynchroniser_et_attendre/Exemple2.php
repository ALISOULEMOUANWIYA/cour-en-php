<!doctype html>
<html> 
    <style>
        body{
            background: rgb(31 32 33 / 87%);
        }
        body h2{
             color: beige;
        }
        .cadre{
            position: relative;
            top: 250px;
            left: 120px;
            width: 220px;
            height: 60px;
            background: #967171;
            margin: 0px 5px;
            border-radius: 10px;
            border-left-style: groove;
            border-right-style: groove;
            box-shadow:13px 8px 2px 3px rgb(126 126 150 / 40%);
            transition: 0.5s;
        }
        .cadre:hover{
            background: #2b2525;
            border-color: black;
            transition: 0.5s;
            box-shadow: -4px -2px 9px 3px rgb(0 0 255 / 20%);
        }
        #demo{
            position: relative;
            top: 30%;
            left: 8px;
            font-size: 20px;
            font-weight: bold;
            color: black;
        }
        .cadre:hover 
        #demo{
            text-shadow: 0.2px 0.2px 5px black, 0 0 0.4em blue, 0 0 0.2em blue;
            color: white;
            font: 1.2em Georgia, serif;
        }
    </style>
    <body>
        <h2> Asynchroniseret Attendre </h2>
        <div class="cadre">
            <div id="demo">0</div>
        </div>
        <script>
            'use strict';
            async function MaFonction(){
                let MonPromesse = new Promise(function(Monresolveur, MonRejecteur){
                    Monresolveur("Salut, tu vas bien !!");
                });
                document.getElementById("demo").innerHTML =
                await MonPromesse;
            }
            MaFonction();
        </script>
    </body>    
</html>