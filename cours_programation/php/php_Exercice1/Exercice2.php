<!DOCTYPE html>
<html>
<body>

<?php
   /* 
       $x = 4;
        $y = 10;
        function mytest(){
            //global $color ;
            $GLOBALS['y'] = $GLOBALS['y'] + $GLOBALS['x'];
            //echo "Ma voiture est ".$color."<br>";
           // echo "Ma voiture est ".$color."<br>";
        }
        mytest();
        echo "<p>Variable x out side fonction is : $y</p>";
   */
    
   /* 
        function mytest(){
            static $x = 0;
            print $x + 1;
            $x++;
        }
        mytest();
    */
    /*
       strlen : calculer la longuer du chaine
       str_word_count : calculer les nombre de mot d'une chaine
       strrev : ranvercer une chain
       strpos : chercher une chaine dans une autre chaine
       str_replace() : emplacer un mot specifique dans une chaine 
    */
    $a = "salut mon ami";
    $x = 59;
    $y = 59.85;
    $z = array("Volve","BMW","Toyota");
    
    var_dump($a);// afficher le type du variable 
    print "<br>"; 
    
    var_dump($x);// afficher le type du variable 
    print "<br>"; 
    
    var_dump($y);// afficher le type du variable 
    print "<br>";    
    
    var_dump($z);// afficher le type du variable
    print "<br>";  
    
    echo "Nombre de caracter y compris les espace est : ".strlen($a);
    print "<br>"; 
    
    echo "Nombre de mot est :".str_word_count($a);
    print "<br>"; 
    
    echo "(".$a.") son renvercement est : (".strrev($a).")";
    print "<br>"; 
    
    echo " ami se trouve a la position  : (".strpos($a, "ami").")";
    print "<br>"; 
    
    echo " repmlacement de ami par frere : (".str_replace("ami","frere",$a).")";
    print "<br>";
    
?>

</body>
</html>