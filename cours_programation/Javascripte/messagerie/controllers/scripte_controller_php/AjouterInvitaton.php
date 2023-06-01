
<?php
  session_start();
   require_once "ControllersUser.php";
  $compteUser = new ControllersUser();
  $compteUser->AccepterMembreAmi($_GET['Invitation'], $_GET['idMembre']);
  // echo "je suis un testeur ".$_GET['Invitation']." ; ".$_GET['idMembre'];
?> 