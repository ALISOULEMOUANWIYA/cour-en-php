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
            color: darkslategrey;
        }
        #demo input{
            position: relative;
            top: -5px;
            height: 30px;
            border-radius: 20px;
        }
    </style>
    <body>
        <h2> Les Forms </h2>
        <div class="cadre">
            <div id="demo">
                <form name="MonForm" action="/action_page.php" onsubmit="return validerForm()" method="post">
                    <input type="text" name="fname">
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
        <script>
            'use strict';
            function validerForm(){
                var x = document.forms["MonForm"]["fname"].value;
                if(x == ""){
                    alert("Le champs est toujour à vide !");
                    return false;
                }
            }
        </script>
    </body>    
</html>