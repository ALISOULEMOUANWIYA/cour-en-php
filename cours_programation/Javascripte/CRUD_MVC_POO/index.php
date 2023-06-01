<?php
 require_once 'Utils/Utils.php';
 include_once 'view/shared/header.php';
 require_once 'controller/ContactControllers.php';
    $contaxteCtrl = new ContactControllers();
    $contaxteCtrl->viewManager();
 include_once 'view/shared/footer.php';

?>