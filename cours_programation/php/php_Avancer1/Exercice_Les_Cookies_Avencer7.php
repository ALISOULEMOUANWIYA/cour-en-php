    <?php
/*
    1)
        $Cookie_Utilisateur = "Abonner";
        $Cookie_Nom = "Rachen keyz";  
*/
/*
    2)
       $Cookie_Utilisateur = "Abonner";
        $Cookie_Nom = "sotche";
*/
    //setcookie($Cookie_Utilisateur, $Cookie_Nom, time() + (86400 * 30), "/");// creation cookie
    // avec 86400 = 1 jour;

    // setcookie("Abonner", "", time() - 3600);// supression cookie
     setcookie("Abonner", "", time() + 3600);// Verifier si les cookies sont activés
    ?>
<html>
<body>
    <?php
/*
            echo "------------Créer / récupérer un cookie (1)----------<br>";
            if(!isset($_COOKIE[$Cookie_Utilisateur])){
                echo "cookie nom '".$Cookie_Nom."' n'est pas défini <br>";
            }else{
                echo "cookie '".$Cookie_Utilisateur."' est défini <br>";
                echo "La valeur est : ".$_COOKIE[$Cookie_Utilisateur]." est<br>";
            }
*/
    
/*
        echo "<br>------------Modify a Cookie Value (2)----------<br>";
            if(!isset($_COOKIE[$Cookie_Utilisateur])){
                echo "cookie nom '".$Cookie_Nom."' n'est pas défini <br>";
            }else{
                echo "cookie '".$Cookie_Utilisateur."' est défini <br>";
                echo "La valeur est : ".$_COOKIE[$Cookie_Utilisateur]." est<br>";
            }
*/
    
/*
        echo "<br>------------Supprimer un cookie----------(3)<br>";
                echo "cookie Abonner est Supprimer <br>";
*/
    

        echo "<br>------------ Vérifiez si les cookies sont activés (4)----------<br>";
            if(count($_COOKIE) > 0){
                echo "Les cookies sont activés.<br>";
            }else{
                echo "Les cookies sont désactivés.<br>";
            }

    ?>
</body>
</html>