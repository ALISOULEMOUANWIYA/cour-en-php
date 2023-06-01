<?php
session_start(); 
    require_once 'config.php';

  class Send_chat_scripte{
    private $messageEr; 
    public function __construct(){
        $this->database = new Database();
    }
    public function insert($incoming_msg_id, $outgoing_msg_id, $msg){
        $requete = "INSERT INTO messages(incoming_msg_id, outgoing_msg_id, msg) VALUE(?,?,?)";
        $queryprepare = $this->database->getDBB()->prepare($requete);
          // Exécuter la requête 
        $queryprepare->execute(array($incoming_msg_id, $outgoing_msg_id, $msg));
        echo "Success"; 
    }
  }
  if(isset($_SESSION['unique'])){
      $envoi = new Send_chat_scripte();
      $envoi->insert($_POST['messageEntre'], $_POST['messageSortie'], $_POST['message']);
  }
?>