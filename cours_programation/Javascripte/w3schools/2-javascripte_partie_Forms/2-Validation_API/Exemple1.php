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
            height: 97px;
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
            text-align: center;
            display: initial;
            position: relative;
            top: 2px;
            height: 30px;
            border-radius: 20px;
        }
        #demo #inp2{
            text-align: center;
            display: initial;
            position: relative;
            top: 2px;
            height: 30px;
            border-radius: 20px;
        }
        #demo #inp1{
            width: 160px;
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
                    <input id="inp1" min="100" max="300" type="number" name="fname" required>
                    <button id="inp2" onclick="validerForm()">Tester</button>
                </form>
            </div>
            <p id="alert">Veuillez saisir un nombre entre 100 et 300:</p>
        </div>
        <script>
            'use strict';
            function validerForm(){
                var x = document.getElementById("inp1");
                if(!x.checkValidity()){
                    document.getElementById("alert").innerHTML= x.validationMessage; 
                    erreurChamps();
                    return false;
                }else{
                    if(x < 100 || x > 300){
                        grandire();
                        return false;
                    }else{
                        reduir();
                        return false;
                    } 
                }
            }
            function reduir(){
                document.getElementById("inp1").style.top="2px";
                   document.getElementById("inp2").style.top="2px";
                   document.getElementById("cadre").style.height="90px"; 
                 document.getElementById("alert").innerHTML=
                    "BRAVOOOO !!! cet Valeur est sur cet inteval";
            }
            function grandire(){
                document.getElementById("inp1").style.top="-5px";
                   document.getElementById("inp2").style.top="-5px";
                   document.getElementById("cadre").style.height="98px"; document.getElementById("alert").innerHTML=
                    "il vous faut saisir un nombre qui sur cet inteval = [1 a 10]";  
            }
            function erreurChamps(){
                document.getElementById("inp1").style.top="-5px";
                   document.getElementById("inp2").style.top="-5px";
                   document.getElementById("cadre").style.height="98px";  
            }
            /*
customError : Défini sur true, si un message de validité personnalisé est défini.

patternMismatch : Défini sur true, si la valeur d'un élément ne correspond pas à son attribut pattern.

rangeOverflow : Défini sur true, si la valeur d'un élément est supérieure à son attribut max.

rangeUnderflow : Défini sur true, si la valeur d'un élément est inférieure à son attribut min.

stepMismatch : Défini sur true, si la valeur d'un élément n'est pas valide par son attribut step.

tooLong : Défini sur true, si la valeur d'un élément dépasse son attribut maxLength.

typeMismatch : Défini sur true, si la valeur d'un élément n'est pas valide selon son attribut de type.

valueMissing : Défini sur true, si un élément (avec un attribut obligatoire) n'a pas de valeur.

valid : Défini sur true, si la valeur d'un élément est valide.
            */
        </script>
    </body>    
</html>