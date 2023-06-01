<?php 
    session_start();
    require_once 'Role_Compte.php';
    $modifier = new ModifierClerUtilisateur($_GET['subject'], $_GET['idCmpt'], $_GET['cle']);
    $BDD=null;
//echo $_GET['subject']." ".$_GET['idCmpt']." ".$_GET['cle'];
    header("Location: ../pages/Coffres.php");
?>