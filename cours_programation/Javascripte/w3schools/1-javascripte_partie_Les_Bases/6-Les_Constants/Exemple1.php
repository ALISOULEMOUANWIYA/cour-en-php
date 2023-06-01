<!doctype html>
<html>     
    <body>
        <h2>Un page Web </h2>
        <p id="demo1"></p>
        <script>
            try{
                const pi = 3.141592653589793;
                pi = 3.14;
            }catch(err){
                document.getElementById("demo1").innerHTML = err; 
            }
        </script>
    </body>    
</html>