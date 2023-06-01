<!doctype html>
<html>     
    <style>
        .cadre{
            position: relative;
            top: 250px;
            left: 120px;
            width: 150px;
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
        <div class="cadre">
            <p id="demo">0</p>
        </div> 
        <script>
            'use strict';
            setTimeout(function() { 
                       MonDisplay("Je vous suit !!!")
                      },
                      3000
            );
            function MonDisplay(valeur){    
                document.getElementById("demo").innerHTML=
                    valeur;
            }
        </script>
    </body>    
</html>