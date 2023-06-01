<!doctype html>
<html>     
    <body>
        <h2> Méthodes de chaîne JavaScript </h2>

        <p> Cliquez sur "Essayer" pour afficher le premier élément du tableau, après un fractionnement de chaîne. </p>
        <button onmouseover="MonFonction()">Survole</button>
        <p id="demo1"></p>
        <p id="demo2"></p>
        <p id="demo3"></p>
        <p id="demo4"></p>
        <p id="demo5"></p>
        <p id="demo6"></p>
        <script>
            function MonFonction(){
                var str = "a,b,c,d,e,f";
                var arr = str.split(",");
                for(var i = 0; i<arr.length; i++){
                    document.getElementById("demo"+(i+1)+"").innerHTML = arr[i];
                }
            }
          
        </script>
    </body>    
</html>