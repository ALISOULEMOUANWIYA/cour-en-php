
<?php
  session_start();
   require_once "ControllersUser.php";
        $compteUser = new ControllersUser();
        // echo ($compteUser->Actualiser($_GET['Invitation3']));
        echo ($compteUser->Actualiser(3));


?> 