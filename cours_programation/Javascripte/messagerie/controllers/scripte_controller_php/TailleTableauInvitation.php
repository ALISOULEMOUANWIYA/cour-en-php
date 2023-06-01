<?php
  session_start();
   require_once "ControllersUser.php";
   $listes = new ControllersUser();
   $listes->ListesAmi();
   echo count($listes->getListeAmi());
?> 