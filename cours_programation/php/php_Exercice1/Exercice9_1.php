<html>
<body>
    
<?php
    
    /*
      preg_match();
      preg_match_all();
      preg_replace;
    */
 $str = "visit w3Scools";
 $pattern = "/W3SCOOLS/i";
    echo preg_match($pattern, $str)."<br>";// 1
    
$str1 = "The rain in SPAIN falls mainly on the plains.";
$pattern1 = "/ain/i"; 
    echo preg_match($pattern1, $str1)."<br>";// 1
    
$str2 = "Visit Microsoft!";
$pattern2 = "/microsoft/i";
echo preg_replace($pattern2, "W3Schools", $str2)."<br>";// Visit W3Schools
        
$str3 = "Apples and bananas.";
$pattern3 = "/ba(na){2}/i";
echo preg_match($pattern3, $str3);// 1
?>


</body>
</html>