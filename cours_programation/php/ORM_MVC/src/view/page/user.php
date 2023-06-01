<?php
  session_start();
if(!isset($_SESSION['unique'])){
    header("location: http://localhost/cours_programation/Javascripte/messagerie/index.php");
}else{
    $_SESSION['ID_unique'] = $_SESSION['unique'];
    require_once "controllers/scripte_controller_php/Chat_Id.php";
    $compteUser = new Chat_Id();
    $compteUser->Personne($_SESSION['ID_unique']);

    // require_once "controllers/scripte_controller_php/ControllersUser.php";
    // $comptePersonne = new ControllersUser();
    // $comptePersonne->ListesAmi();

}
?>  
<div class="wrapper">
  <div class="ListeMenu">
    <div class="Menu">
      <button class="NavigationBtn active message">Messages<i class="fa fa-comments-o" aria-hidden="true"></i></button>
    </div>
    <div class="Menu">
      <button class="NavigationBtn amiM">Ami<i class="fa fa-user-circle-o" aria-hidden="true"></i></button>
    </div>
    <div class="Menu">
      <button class="NavigationBtn membreM">Membre<i class="fa fa-users" aria-hidden="true"></i></button>
    </div>
    <div class="Menu">
      <button class="NavigationBtn invitationM">Invitation<i class="fa fa-user-plus" aria-hidden="true"></i></button>
    </div>
  </div>
<div class="ListeMenu2">
      <div class="pageActivity MessageAjouterPage">
           <section class="user">
            <header>
                <div class="content">
                    <img src="#" alt="">
                    <div class="details">
                         <span><?php echo $compteUser->getListes()['fname']." ".$compteUser->getListes()['lname'];?></span> 
                         <p><?php echo $compteUser->getListes()['status'];?></p> 
                    </div> 
                </div>
                <a href="index.php?view=dec&partire=<?php echo $_SESSION['unique'];?>" class="logout">Logout</a>    
            </header>
            <div class="search">
                <span>Select un user to start chat</span>
                <input type="text" placeholder="Entrer le nom de recherche">
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
            <div class="user-list">

            </div>
         </section>
      </div>
      <div class="pageActivity amiPage Amijouter">
           <section class="userAmijouter">

          </section>
      </div>
      <div class="pageActivity membrePage">
         <section class="userMembre">
           
         </section>
      </div>
      <div class="pageActivity invitationPage">
         <section class="userInvitation">

            
         </section>
      </div>
  </div>
</div>
  
<script src="assets/javascripte/ami.js"></script>
<script src="assets/javascripte/membre.js"></script>
<script src="assets/javascripte/user.js"></script>