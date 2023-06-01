<?php
  session_start();
   require_once "ControllersUser.php";
  $compteUser = new ControllersUser();
  $compteUser->MesAmis();
// $compteUser->Listes();
//    foreach($compteUser->getListes() as $row ){
//     $i += 1;
//         if($compteUser->VerificationAmis($row['unique_id'], $_SESSION['unique'],  1) == true){
//                 $ici .= "            <div class='list user_list_Amis".$i."'>
//                 <div class='AmisPersonne AmisAjouter".$i."'>
//                   <div class='content'>
//                   <img  src='assets/images/".$row['img']."' class='details' alt=''>
//                   <div class='UserNom details'>
//                       <span class='UserFnam'>".$row['fname']."</span>
//                       <span class='UserLnam'>".$row['lname']."</span>
//                   </div>
//                   </div>
//                   <div class='choixAction action".$i."'>
//                       <span style='position : absolute; visibility: hidden; bottom: 12px;' class='IDuniqueMembre InvitationUnique".$i."'>".$row['unique_id']."</span>
//                       <div name='Demande' class='idDemande ListeButton'>
//                          <Button onclick='faitActionAccepter2(".$i.")' class='button2' value='3'><i class='fa fa-trash-o' aria-hidden='true' ></i></Button>
//                       </div>
//                   </div>
//                 </div>  
//             </div>";;
//         }
//     }
//     echo $ici;
?> 