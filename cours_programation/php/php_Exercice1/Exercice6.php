<!DOCTYPE html>
<html>
<body>

<?php //declare(strict_types=1);
    function familyName($nom, $year){
        echo "$nom ali . nait en $year <br>";
    } 
    function addNumbers(float $a, float $b) : int {
        return (int) ($a + $b);
    }
    familyName("Mouanwiya","2020");
    familyName("soule ","2018");
    echo addNumbers(5.1 , 5.1)."<br>";
    
    function setHeight(int $minheight = 50) {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight(); // will use the default value of 50
    setHeight(135);
    setHeight(80);
    
    function add_five(&$value) {
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num."<br>";
    
    
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.<br>";
    
     $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
     echo count($age)."<br>";
     foreach($age as $x => $val) {
       echo "$x  <br>";
     }
?>

</body>
</html>