<?php
   include_once "view/shared/header.php";
    include_once "controllers/scripte_controller_php/menager.php";
        $contaxteCtrl = new menager();
        $contaxteCtrl->viewManager();
   include_once "view/shared/footer.php";
?>