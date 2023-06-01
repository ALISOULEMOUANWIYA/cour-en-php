<?php
 include_once 'view/tete_pied/header.php';
 require_once 'controller/clubControllers.php';
    $clubCtrl = new clubControllers();
    $clubCtrl->viewPage();
 include_once 'view/tete_pied/footer.php';

?>