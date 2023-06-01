<?php
  session_start();
   require_once "ControllersUser.php";
   $listes = new ControllersUser();
   $listes->Listes();
   echo count($listes->getListes());
?> 