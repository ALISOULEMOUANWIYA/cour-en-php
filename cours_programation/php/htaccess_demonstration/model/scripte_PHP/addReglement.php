<?php
   require_once "../reglementdb.php";

     $regleListe = new reglementdb();
     $regleListe->addReglement($_GET['datesF'], $_GET['IdF']);
?> 