<! DOCTYPE html>
<html>
    <body>

        <p id = "demo"> </p>
        <p id = "demo1"> </p>
        <p id = "demo2"> </p>
        <p id = "demo3"> </p>

        <script>
            var dates = new Date();

            document.getElementById ("demo").innerHTML = dates;
            document.getElementById ("demo1").innerHTML = dates.toISOString();
            document.getElementById ("demo2").innerHTML = dates.toUTCString();
            document.getElementById ("demo3").innerHTML = dates.toString();
        </script>
    </body>
</html>