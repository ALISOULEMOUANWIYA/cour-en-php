<?php
   require_once "../facturedb.php";

     $factureListe = new facturedb();
     $factureListe->addFacture($_GET['datesF'], $_GET['ConsommationF'], $_GET['prixF'], $_GET['paimentF']);
?> 