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
              let MaPrommesee = new Promise(function(MonResolveu, MonRejecteur){
                let requet = new XMLHttpRequest();
                requet.open('GET',"fichierHTML.php");
                requet.onload = function(){
                    if(requet.status == 200){
                        MonResolveu(this.responseText);
                    }else{
                        MonRejecteur("Error : "+requet.status);
                    }
                }
                requet.send();
            });
            MaPrommesee.then(
                function(valeur){
                    MonDisplay(valeur);  
                },
                function(erreur){
                    MonDisplay(erreur);
                }
            );
        </script>
    </body>    
</html>