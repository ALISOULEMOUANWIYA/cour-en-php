    <?php
        // // Démarre la session
        session_start();
    ?>

<!DOCTYPE html>
<html>
<body>
    <?php
        // Définir les variables de session
        $_SESSION["favorie_Couleur"] = "Bleu";
        $_SESSION["favorie_Animale"] = "chat";
        echo "Les variables de session sont définies.". ".<br><br>";
        echo " Couleur Vavore : ".$_SESSION["favorie_Couleur"]."<br>";
        echo " animale Vavore : ".$_SESSION["favorie_Animale"]."<br><br>";
        echo " -----------------------------------<br><br>";
        $_SESSION["favorie_Couleur"] = "Bleu ciel";
        echo " Couleur Vavore : ".$_SESSION["favorie_Couleur"]."<br>";
        echo " animale Vavore : ".$_SESSION["favorie_Animale"]."<br><br>";
        print_r($_SESSION);
        echo "<br><br> supprimer toutes les variables de session -----------------------------------<br><br>";
    // supprimer toutes les variables de session
        session_unset();
        print_r($_SESSION);
        echo "<br><br>détruit la session-----------------------------------<br><br>";
    // détruit la session
        session_destroy();
        print_r($_SESSION);
    ?>
</body>
</html>