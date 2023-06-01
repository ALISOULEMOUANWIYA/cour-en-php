<?php
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);// arengement apr lettre magiscule
    $clength = count($cars);
    foreach($cars as $tab) {
      echo $tab;
      echo "<br>";
    }
echo "<br>---------<br>";
    // ordre decroissante 
    rsort($cars);
    foreach($cars as $tab) {
      echo $tab;
      echo "<br>";
    }
echo "<br>---------<br>";
    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);// arrengement croissante
    foreach($numbers as $tab) {
      echo $tab;
      echo "<br>";
    }
echo "<br>---------<br>";
    rsort($numbers);// arrengement decroissante
    foreach($numbers as $tab) {
      echo $tab;
      echo "<br>";
    }
echo "<br>---------<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age); // arrengement lettre desordonner
    foreach($age as $tab => $an) {
      echo $tab." = ".$an;
      echo "<br>";
    }
echo "<br>---------<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    ksort($age);// arrengement lettre croissante
    foreach($age as $tab => $an) {
      echo $tab." = ".$an;
      echo "<br>";
    }
echo "<br>---------<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    arsort($age);// arrengement Nombre decroissante
    foreach($age as $tab => $an) {
      echo $tab." = ".$an;
      echo "<br>";
    }
echo "<br>---------<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    krsort($age);// arrengement lettre decroissante
    foreach($age as $tab => $an) {
      echo $tab." = ".$an;
      echo "<br>";
    }
echo "<br>---------<br>";
?>