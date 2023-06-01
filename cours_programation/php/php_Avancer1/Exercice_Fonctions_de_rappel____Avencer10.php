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
        // methode 1
/*
            echo "<h4>Fonction rappel (1)</h4><br>";
            function Rappele($liste){
                return strlen($liste);
            }
        $string = ["mang","orange","banane","coco"];
        $longueur = array_map("Rappele",$string);// la longueur de chaque mot
        print_r($longueur);
*/
        
        // methode 2
/*
        echo "<h4>Fonction rappel (2) </h4><br>";
         $string = ["mang","orange","banane","coco"];
         $longueur = array_map(function($liste){
            return strlen($liste);
         }, $string);
          print_r($longueur);
*/
            echo "<h4>Rappels dans les fonctions définies par l'utilisateur </h4><br>";
            function exclamation($str){
            return $str."!";
            }
            
            function Interogation($str){
                return $str."?";
            }
            function ecrireFormater($str, $format){
                // Appel de la fonction de rappel $formater
                echo $format($str);
            }
            // Passez "exclaim" et "ask" comme fonctions de rappel à printFormatted()
            ecrireFormater("bonjour ","exclamation");
            ecrireFormater("bonjour", "Interogation");
         ?>
    </body>
</html>