<!DOCTYPE html>
<html>
<body>

<?php
    $t = date("H");
    echo "$t <br>";
    if($t < "20"){
        echo "have a good mornig !<br>";
    }elseif($t < "20"){
        echo "have a good day !<br>";
    }else{
        echo "have a good day !<br>";
    }
    

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo count($age)."<br>";
    foreach($age as $x => $val) {
      echo "$x = $val<br>";
    }
/*
    Peter = 35
    Ben = 37
    Joe = 43
*/
    
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");    
    
    

?>

</body>
</html>