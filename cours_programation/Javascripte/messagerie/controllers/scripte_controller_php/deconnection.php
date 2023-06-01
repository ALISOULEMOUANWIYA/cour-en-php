<?php
  session_start();
if(isset($_SESSION['unique'])){
    $ParitireUser_id = $_GET['partire'];
    $statusUser = "hors ligne maintenant";
    require_once "Chat_Id.php";
     $compteUser = new Chat_Id();
    if($compteUser->decon_OR_Conne($statusUser, $ParitireUser_id)){
        session_unset();
        session_destroy();
        header("location: http://localhost/cours_programation/Javascripte/messagerie/index.php");
    }else{
      header("location: http://localhost/cours_programation/Javascripte/messagerie/index.php?view=user");
    }
}else{
//    header("location: http://localhost/JAVASCRIPTE/messagerie/index.php");
}
?>