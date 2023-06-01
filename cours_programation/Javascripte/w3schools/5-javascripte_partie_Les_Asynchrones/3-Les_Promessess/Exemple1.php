<!doctype html>
<html>     
    <style>
        .Liste_cadre{
            position: relative;
            width: 400px;
            height: 200px;
            top: 250px;
            left: 120px;
            display: flex;
        }
        .cadre{
            margin: 0px 5px;
            position: relative;
            width: 110px;
            height: 70px;
            background: #ccc;
            border-radius: 10px;
            border-left-style: groove;
            border-right-style: groove;
            box-shadow: 5px 5px 2px 1px rgba(0, 0, 255, .2);
            transition: 0.5s;
        }
        .cadre:hover{
            border-color: black;
            transition: 0.5s;
            box-shadow: 50px -10px teal;
        }
        #demo, #demo1{
            text-align: center;
        }
        .cadre:nth-child(1) #demo{
            position: relative;
            font-size: 20px;
            font-weight: bold;
            color: crimson;
            
        }
        .cadre:nth-child(2) #demo1{
            position: relative;
            font-size: 20px;
            font-weight: bold;
            color: crimson;
            
        }
        .cadre:hover 
        #demo, #demo1{
            text-shadow: 0.2px 0.2px 5px black, 0 0 0.4em blue, 0 0 0.2em blue;
            color: white;
            font: 1.2em Georgia, serif;
        }
    </style>
    <body>
        <div class="Liste_cadre">
            <div class="cadre">
                <p id="demo">0</p>
            </div>
            <div class="cadre">
                <p id="demo1">0</p>
            </div>
        </div>
        
        <script>
            'use strict';
            setInterval(MonDisplay, 1000);
            function MonDisplay(){ 
                let d = new Date();
                    document.getElementById("demo").innerHTML=
                    d.getHours()+" : "+
                    d.getMinutes()+" : "+
                    d.getSeconds()+" : "+
                    d.getMilliseconds();
            }
            function MonDisplayChaine(some){
                document.getElementById("demo1").innerHTML= some;
            }
            
            let MonPromesse = new Promise(function(MonResolve, MonReject){
                let  x = 0;
                
                // un peu de code (essayez de changer x en 5)
                if( x == 0){
                    MonResolve("Ok");
                }else{
                    MonReject("Error");
                }
            });
            
            MonPromesse.then(
                function(valeur){
                  MonDisplayChaine(valeur);  
                },
                function(erreur){
                    MonDisplayChaine(erreur);
                }
            );
        </script>
    </body>    
</html>