<!doctype html>
<html> 
    <body>
        <h2> Rappel JavaScript </h2>
        <div class="cadre">
            <div id="demo">0</div>
        </div>
        <script>
            'use strict';
            function MonDisplay(some){
                    document.getElementById("demo").innerHTML=
                    some;
            }
            function ObtenirefichierHTML(AppelFichier){
                let requet = new XMLHttpRequest();
                requet.open('GET',"Exemple7.php");
                requet.onload = function(){
                    if(requet.status == 200){
                        AppelFichier(this.responseText);
                    }else{
                        AppelFichier("Error : "+requet.status);
                    }
                }
                requet.send();
            }
            ObtenirefichierHTML(MonDisplay);
        </script>
    </body>    
</html>