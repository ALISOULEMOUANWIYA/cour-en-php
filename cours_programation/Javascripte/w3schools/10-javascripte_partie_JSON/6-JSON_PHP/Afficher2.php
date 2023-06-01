<?php   
require_once 'Controllers.php';
class Persones{
   // Propriétés
    private  $tabRole;
    private $query; 
    private $database;
    
    private $monObjets;

    public function __construct(){
        $this->database = new Controllers;
    }

    // les commitateur
    public function get_Persones(){
      return($this->tabRole);
    } 
    
    public function lister($objets){
      $monObjets = json_decode($objets, false);
        
      $requet = "SELECT idjoueur, prenom, nom, ageEntrer, NumeroMaillot, idclubf FROM joueur LIMIT ".$monObjets->limit;
      $this->query = $this->database->connexion()->prepare($requet);
        
      // Exécuter la requête 
      $this->query->execute();
        
      //return un boolan
      return($this->query->fetchAll());
    }
}
    header("Content-Type: application/json; charset=UTF-8");
    $variable = new Persones();
    echo json_encode($variable->lister($_POST['x']));
?>