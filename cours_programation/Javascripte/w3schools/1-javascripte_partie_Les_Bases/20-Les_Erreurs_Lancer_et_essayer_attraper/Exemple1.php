<! DOCTYPE html>
<html>
    <body>
        <input id="capteur" type="text" required>
        <button type="button" onclick="Cliquer()">Actualiser</button>
        <p id = "demo"> </p>
        <p id = "demo1"> </p>
        <p id = "demo2"> </p>
        <p id = "demo3"> </p>
        <p id = "demo4"> </p>
        <p id = "demo5"> </p>
        <p id = "demo6"> </p>
        <p id = "demo7"> </p>
        <p id = "demo8"> </p>
        
        <script>
            "use strict";
            function Cliquer(){
                var message, x;
                message = document.getElementById("demo");
                message.innerHTML = "";
                x = document.getElementById("capteur").value;
               try{
                if(x == ""){
                    throw "vide";
                }else{
                 if(isNaN(x)){
                    throw "n'est pas un nombre";
                 }else{
                     if(x < 5){
                         throw "trop petit";
                     }else{
                         if(x > 10){
                             throw "trop grande";
                         }
                     }
                 }  
                }
               }catch(err){
                   message.innerHTML = "L'entrée est "+err+".";
               }finally{
                   document.getElementById("demo").value = "";
               }
            }
        </script>
    </body>
</html>