<!doctype html>
<html>     
    <body>
        <p id="demo"></p>
        <p id="demo1"></p>
        <script>
            'user strict';
            var MonObkjet ={
               Nom :"Ali soule",  
               Prenom :"Mouanwiya",  
               FullNom : function(){
                   return(this);
               }  
            };
            document.getElementById("demo").innerHTML =
                MonObkjet.FullNom();
        </script>
    </body>    
</html>