
<?php
  session_start();
   require_once "ControllersUser.php";
  $compteUser = new ControllersUser();
  $compteUser->SuppressionAmiAjouter($_GET['idMembre'], $_GET['Invitation']);
?> 