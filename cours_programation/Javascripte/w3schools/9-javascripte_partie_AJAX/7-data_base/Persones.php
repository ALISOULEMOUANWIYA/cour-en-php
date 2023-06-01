<?php   
require_once 'controllers.php';
class Persones{
   // Propriétés
    private  $tabRole;
    private $query; 
    private $database;

    public function __construct(){
        $this->database = new controllers;
    }

    // les commitateur
    public function get_Persones(){
      return($this->tabRole);
    } 
    public function lister($depos){
      $requet = "SELECT idjoueur, prenom, nom, ageEntrer, NumeroMaillot, idclubf FROM joueur Where prenom =:prenomp";
      $this->query = $this->database->connexion()->prepare($requet);
      $this->query->bindParam(":prenomp", $depos);
      // Exécuter la requête 
      $this->query->execute();
      //return un boolan
      return($this->query->fetch());
    }
}
?>