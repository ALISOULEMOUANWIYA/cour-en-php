<!doctype html>
<html> 
    <style>
        body{
            background: rgb(31 32 33 / 87%);
        }
        body h2{
            position: relative;
            width: 300px;
            top: 240px;
            left: 24%;
            font-weight: bold;
             color: beige;
            text-align: center;
        }
        .cadre{
            position: relative;
            top: 250px;
            left: 24%;
            width: 260px;
            height: 50px;
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
            text-shadow: 0.1px 0.1px 5px black, 0 0 0.3em blue, 0 0 0.1em blue;
            color: white;
            font: 1.0em Georgia, serif;
        }
        #demo{
            position: relative;
            top: 10%;
            left: 8px;
            font-size: 20px;
            font-weight: bold;
            color: darkslategrey;
        }
        #demo input{
            display: initial;
            position: relative;
            top: 2px;
            height: 30px;
            border-radius: 20px;
        }
        .cadre p{
            text-align: center;
        }
    </style>
    <body>
        <h2> Les Forms </h2>
        <div class="cadre" id="cadre">
            <div id="demo">
                <form name="MonForm" action="" onsubmit="return validerForm()" method="post">
                    <input id="inp1" type="text" name="fname"   >
                    <input id="inp2" type="submit" value="Envoyer">
                </form>
            </div>
            <p id="alert"></p>
        </div>
        <script>
            'use strict';
            function validerForm(){
                var x = document.forms["MonForm"]["fname"].value;
                if(x == ""){
                   grandire();
                    return false;
                }else{
                    reduir();
                    return true;
                }
            }
            function reduir(){
                document.getElementById("inp1").style.top="2px";
                   document.getElementById("inp2").style.top="2px";
                   document.getElementById("cadre").style.height="50px"; 
                 document.getElementById("alert").innerHTML=
                    "";
            }
            function grandire(){
                document.getElementById("inp1").style.top="-5px";
                   document.getElementById("inp2").style.top="-5px";
                   document.getElementById("cadre").style.height="130px"; document.getElementById("alert").innerHTML=
                    "Si vous cliquez sur Soumettre, sans remplir le champ de texte, votre navigateur affichera un message d'erreur.";  
            }
        </script>
    </body>    
</html>