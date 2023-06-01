<?php
session_start(); 
    require_once 'config.php';

  class Get_chat_scripte{
    private $Utilisateur = ""; 
    private $tableau; 
    public function __construct(){
        $this->database = new Database();
    }
    public function obtenire($incoming_msg_id, $outgoing_msg_id){
        $requete = "SELECT * FROM messages
        LEFT JOIN users ON users.unique_id = messages.incoming_msg_id
        WHERE(incoming_msg_id = ? AND outgoing_msg_id = ?) 
        OR (incoming_msg_id = ? AND outgoing_msg_id = ?)
        ORDER BY msg_id ";
        $queryprepare = $this->database->getDBB()->prepare($requete);
          // Exécuter la requête 
        $queryprepare->execute(array($incoming_msg_id, $outgoing_msg_id, $outgoing_msg_id, $incoming_msg_id));
        $this->setListes($queryprepare->fetchAll());
    }
    public function trouver($incoming_msg_id, $outgoing_msg_id){
        $this->obtenire($incoming_msg_id, $outgoing_msg_id);
        if(is_array($this->getListes())){
           if(sizeof($this->getListes()) > 0){
               foreach($this->getListes() as $row1 ){ 
                 if($row1['outgoing_msg_id'] == $outgoing_msg_id){
                    $this->Utilisateur .= '<div class="chat outgoing">
                                               <div class="details">
                                                 <p>'.$row1['msg'].'</p>
                                               </div>
                                               <img src="#" alt="">
                                          </div>';
                     }else{
                       $this->Utilisateur .= '<div class="chat incoming">
                                               <img src="#" alt="">
                                               <div class="details">
                                                 <p>'.$row1['msg'].'</p>
                                               </div>
                                            </div>';
                     }
               }
            }else{
              $this->Utilisateur .= "Saisissez Quelque Chose !";
            }
        }else{
          $this->Utilisateur .= "Saisissez Quelque Chose !";
        }
        echo $this->Utilisateur;  
    }
    
      //Les GETTER
    public function getListes(){
      return($this->tableau);   
    }

      //Les SETTER
    public function setListes($valeur){
      $this->tableau = $valeur;   
    }
  }

  if(isset($_SESSION['unique'])){
     
      $envoi = new Get_chat_scripte();
      $envoi->trouver($_POST['messageEntre'], $_POST['messageSortie']);
//      echo "salut ";
  }
?>