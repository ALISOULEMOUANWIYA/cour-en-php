
<?php
  session_start();
   require_once "ControllersUser.php";
  $compteUser = new ControllersUser();
  $compteUser->SupprimerDemandeEntrant($_GET['idMembre'], $_GET['Invitation']);
?>  