<?php
  session_start();
   require_once "ControllersUser.php";
   $listes = new ControllersUser();
   $listes->ListesAmiAjouter();
   echo count($listes->getListesAmiAjouter());
?> 