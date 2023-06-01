<! DOCTYPE html>
<html>
    <body>
        <button onmouseover="actualiserDate()">Actualiser</button>
        <p id = "demo"> </p>
        <p id = "demo1"> </p>
        <p id = "demo2"> </p>
        <p id = "demo0"> : </p>
        <p id = "demo3"> </p>
        <p id = "demo4"> </p>
        <p id = "demo5"> </p>
        <p id = "demo6"> </p>
        
        <script>
            var dates = new Date();
            
            function actualiserDate(){
                document.getElementById ("demo").innerHTML = dates.getFullYear();
                document.getElementById ("demo1").innerHTML = dates.getMonth();
                document.getElementById ("demo2").innerHTML = dates.getDay();
                document.getElementById ("demo3").innerHTML = dates.getHours();
                document.getElementById ("demo4").innerHTML = dates.getSeconds();
                document.getElementById ("demo5").innerHTML = dates.getMilliseconds();   
                document.getElementById ("demo6").innerHTML = dates.getDate();   
            }
        </script>
    </body>
</html>