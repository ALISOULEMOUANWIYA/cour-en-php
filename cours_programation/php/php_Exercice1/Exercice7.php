<!DOCTYPE html>
<html>
<body>

<?php //declare(strict_types=1);
    $cars = array (
      array("Volvo",22,18),
      array("BMW",15,13),
      array("Saab",5,2),
      array("Land Rover",17,15)
    );
    for ($row = 0; $row < 4; $row++) {
      echo "<a><b> Row number $row</b></a>";
      echo "<ul>";
      for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
      }
      echo "</ul>";
    }
    
    /*
        Row number 0
        Volvo
        22
        18

        Row number 1
        BMW
        15
        13

        Row number 2
        Saab
        5
        2

        Row number 3
        Land Rover
        17
        15
    */
?>

</body>
</html>