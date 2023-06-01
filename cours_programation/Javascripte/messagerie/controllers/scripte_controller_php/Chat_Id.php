 <?php
    require_once 'config.php';

  class chat_Id{
    private $Utilisateur = ""; 
    private $ListesSerache; 
    public function __construct(){
        $this->database = new Database();
    }

    public function Personne($recherche){
        $requetes = "SELECT * FROM users WHERE unique_id = ?";
        $query = $this->database->getDBB()->prepare($requetes);
        $query->execute(array($recherche));
        $this->setListes($query->fetch());   
    }
    public function decon_OR_Conne($status , $partire_id){
      $requete = "UPDATE users SET  status = ? where unique_id =  ?";
      $queryprepare = $this->database->getDBB()->prepare($requete);
      // Exécuter la requête 
      $queryprepare->execute(array($status, $partire_id));
      return($queryprepare);
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
?>