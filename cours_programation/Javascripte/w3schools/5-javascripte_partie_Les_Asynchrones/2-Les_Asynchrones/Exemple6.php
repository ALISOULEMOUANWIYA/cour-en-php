<!doctype html>
<html>     
    <style>
        .cadre{
            position: relative;
            left: 20%;
            top: 50%;
            width: 110px;
            height: 50px;
            background: #ccc;
            border-radius: 10px;
            border-left-style: groove;
            border-right-style: groove;
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
        <h2> Rappel JavaScript </h2>

        <p> Attendez 3 secondes (3000 millisecondes) pour que cette page change. </p>
        <div class="cadre">
            <p id="demo">0</p>
        </div>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'use strict';
            setInterval(MonDisplay, 1000);
            function MonDisplay(){
                let d = new Date();
                    document.getElementById("demo").innerHTML=
                    d.getHours()+" : "+
                    d.getMinutes()+" : "+
                    d.getSeconds();
            }
        </script>
    </body>    
</html>