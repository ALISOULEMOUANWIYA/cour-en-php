 <?php
session_start(); 
    require_once 'config.php';

  class searche{
    private $Utilisateur = ""; 
    private $ListesSerache; 
    public function __construct(){
        $this->database = new Database();
    }

    public function recherche($recherche){
        $requetes = "SELECT * FROM users WHERE NOT unique_id = ? AND (fname LIKE '%{$recherche}%' OR lname LIKE '%{$recherche}%')";
        $query = $this->database->getDBB()->prepare($requetes);
        $query->execute(array($_SESSION['ID_unique']));
        $this->setListes($query->fetch());   
    }
    public function trouver($recherche){
        $this->recherche($recherche);
        if(is_array($this->getListes())){
            $this->Utilisateur .= '<a href="index.php?view=chat&user_id='.$this->getListes()['unique_id'].'">
            <div class="content">
                     <img src="#" alt="">
              <div class="details">
            <span>'.$this->getListes()['fname']." ".$this->getListes()['lname'].'</span>
                <p>test message</p>
              </div>
            </div>
            <div class="status-dot">
                <i class="fa fa-circle" aria-hidden="true"></i>
            </div>
           </a>';
        }else{
          $this->Utilisateur .= "☹️  Controllez Votre saisie";
        }
        echo $this->Utilisateur;  
    }
    
      //Les GETTER
    public function getListes(){
      return($this->ListesSerache);   
    }

      //Les SETTER
    public function setListes($valeur){
      $this->ListesSerache = $valeur;   
    }
  }
 $compteUser = new searche();
  $compteUser->trouver($_POST['searchUser']);
?>