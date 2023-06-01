<!DOCTYPE html>
<html>
<body>

<?php
    /*
       define("Greeting","Welcome to W3School.com");
       echo Greeting;
    */
define("nombre",3.8);
define("GREETING", "Welcome to W3Schools.com!",false);
echo GREETING."<br>";
    
    define("tableau",[
        "alfa romeo",
        "ali soule",
        "mouanwiya"
    ]);
    echo tableau[0];
    
    echo "<br>";
    
    function mytest(){
        var_dump(nombre);
        echo nombre. "<br>";
        echo GREETING;
    }
    mytest();
?>

</body>
</html>