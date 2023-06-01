    <?php
        // // Démarre la session
        session_start();
    ?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php    
        
            //-------------- Valider un entier dans une plage
            echo " <h4> Valider un entier dans une plage <h4> ";
            $entier = 322;
            $petit = 1;
            $grand = 200;
           if(filter_var($entier, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$petit, "max_range"=>$grand))) === false){
               echo("La valeur de la variable n'est pas dans la plage légale <br>");
           }else{
               echo("La valeur de la variable se situe dans la plage légale<br>");
           }
        
            //------------- Valider l'adresse IPv6
           echo " <h4> Valider l'adresse IPv6 <h4> ";
           $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
           if(!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false){
               echo("$ip est une adresse IPv6 valide <br>");
           }else{
               echo("$ip n'est pas une adresse IPv6 valide<br>");
           }
        
           //--------------- Valider l'URL - Doit contenir QueryString
           echo " <h4> Valider l'URL - Doit contenir QueryString <h4> ";
           $url = "https://www.w3schools.com";
           if(!filter_var($ip, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false){
               echo("$url est un URL valide <br>");
           }else{
               echo("$url n'est pas un URL valide<br>");
           }
        
            //-------------- Supprimer les caractères avec une valeur
            echo " <h4> Supprimer les caractères avec une valeur ASCII> 127 <h4> ";
            $string = "<h1>Hello WorldÆØÅ!</h1>";
            $newstring = filter_var($string, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            echo("$newstring <br>");
         ?>
    </body>
</html>