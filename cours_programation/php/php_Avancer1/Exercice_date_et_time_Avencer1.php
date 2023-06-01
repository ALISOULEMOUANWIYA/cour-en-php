
<html>
<body>
   <?php  
    
    // Get a date
        echo "Get a date <br>";
        echo "-----------<br>";
        echo "today is ".date("y/m/d")."<br>";
        echo "today is ".date("y.m.d")."<br>";
        echo "today is ".date("y-m-d")."<br>";
        echo "today is ".date("l")."<br>";
    /*
        Exemple :
        --------
            today is 21/02/06
            today is 21.02.06
            today is 21-02-06
            today is Saturday
    */
    
    // Tip - Automatic Copyright Year
    echo "<br>Automatic Copyright Year <br>";
    echo "--------------------------<br>";
    ?>
    &copy; 2010-<?php
    echo date("Y")."<br>"; 
    /*
        Exemple :
        --------
         © 2010-2021
    */
    ?>
    
    <?php 
        echo "<br>Get a Time <br>";
        echo "--------------------------<br>";
        echo "the time is ".date("h:i:sa")."<br>";
    /*
        Exemple :
        --------
         the time is 10:23:49am
    */
    
    ?>
    
    <?php 
        echo "<br>Get Your Time Zone <br>";
        echo "--------------------------<br>";
        //date_default_timezone_get();
        date_default_timezone_set("America/New_York");
        echo "the time is ".date("h:i:sa")."<br>";
    /*
        Exemple :
        --------
         the time is 04:27:37am
    */
    ?>

    <?php 
        echo "<br>Create a Date With mktime() <br>";
        echo "--------------------------<br>";
        $temps = mktime(11, 14, 54, 7, 4, 2020);
        echo "the time is ".date("Y-m-d h:i:sa", $temps)."<br>";
    /*
        Exemple :
        --------
         the time is 2020-07-04 11:14:54am
    */
    ?>

    <?php 
        echo "<br>Create a Date From a String With strtotime() <br>";
        echo "--------------------------<br>";

        $temps = strtotime("11:14pm April 14 2020");
        echo "the time is ".date("Y-m-d h:i:sa", $temps)."<br>";
    
        $temps = strtotime("tomorrow");
        echo date("Y-m-d h:i:sa",$temps)."<br>";

        $temps = strtotime("next Saturday");
        echo date("Y-m-d h:i:sa",$temps)."<br>";

        $temps = strtotime("+3 Months");
        echo date("Y-m-d h:i:sa",$temps)."<br><br>";
    /*
        Exemple :
        --------
         the time is 2020-04-14 11:14:00pm
         
         2021-02-07 12:00:00am
         
         2021-02-13 12:00:00am
         
         2021-05-06 04:45:17am
    */
    
         $startdate = strtotime("Saturday");
         $enddate = strtotime("+6  week",$startdate);
         while ($startdate < $enddate) {
          echo date("M d", $startdate) . "<br>";
          $startdate = strtotime("+1 week", $startdate);
        }
    echo "<br>";
        $d1=strtotime("July 04");
        $d2=ceil(($d1-time())/60/60/24);
        echo "Il reste " . $d2 ." jours jusqu'au 4 juillet..<br><br>";
    ?>

    
</body>
</html>