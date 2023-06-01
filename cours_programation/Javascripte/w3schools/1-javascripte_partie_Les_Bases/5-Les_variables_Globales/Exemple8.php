<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <p id="demo1"></p>
        <script>
            try{
                pi = 3.14;
                let pi ;
                document.getElementById("demo1").innerHTML = pi ;
            }catch(err){
                 document.getElementById("demo1").innerHTML = err.name+" : "+err.message; 
            }
        </script>
    </body>    
</html>