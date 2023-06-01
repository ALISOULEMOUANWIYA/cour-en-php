<!DOCTYPE html>
<html>
<body>

<?php
    /*
        $x = 30;
        $x1 = cos($x);
        $y = 35.453;
        $z = 35.4e53;
        $strg = "ali";
        $table = array("ali", "souler");
        $boolean = true;
     // verification si c'est type souhaiter
        var_dump(is_int($x));// true
        print "<br>"; 
        var_dump($x1);// calcule cose de 8
        print "<br>"; 
        var_dump(is_int($y));// false
        print "<br>";     
        var_dump(is_infinite($z));// true
        print "<br>"; 
        var_dump(is_float($y));// true
        print "<br>"; 
        var_dump(is_string($strg));// true
        print "<br>"; 
        var_dump(is_array($table));// true
        print "<br>"; 
        var_dump(is_bool($boolean));// true
        print "<br>--------------<br>"; 

        $x = 5985;
        var_dump(is_numeric($x));
        print "<br>"; 

        $x = "598";
        var_dump(is_numeric($x));
        print "<br>"; 

        $x = "59.85" + 100;
        var_dump(is_numeric($x));
        print "<br>"; 

        $x = "Hello";
        var_dump(is_numeric($x));
    */
    
    // casting float to int
        $x = 2345.768;
        $int_cast = (int)$x;
        print $int_cast;
    
        print "<br>";
    
    // casting string to int
        $x = "2345.768";
        $int_cast = (int)$x;
        print $int_cast;
    
    
?>

</body>
</html>