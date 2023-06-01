<?php
  session_start();
if(!isset($_SESSION['unique'])){
    header("location: http://localhost/JAVASCRIPTE/messagerie/index.php");
}else{
    $user_id = $_GET['user_id'];
    require_once "controllers/scripte_controller_php/Chat_Id.php";
     $compteUser = new Chat_Id();
     $compteUser->Personne($user_id);
}
?>
<div class="wrapper">
  <section class="chat-area">
    <header>
        <a href="index.php?view=user" class="return-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <img src="#" alt="">
        <div class="details">
            <span><?php echo $compteUser->getListes()['fname']." ".$compteUser->getListes()['lname'];?></span>
            <p><?php echo $compteUser->getListes()['status'];?></p>
        </div>    
    </header>
    <div class="chat-box">

    </div>
    <form action="#" class="typing-area" autocomplete="off">
        <input type="text" name="messageSortie" value="<?php echo $_SESSION['unique'];?>" hidden>
        <input type="text" name="messageEntre"  value="<?php echo $user_id;?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Message" required>
        <button class="details">
            <i class="fa fa-telegram" aria-hidden="true"></i>
        </button>
    </form>
  </section>
</div>
<script src="assets/javascripte/controllersMessage.js"></script>