<?php

    require_once 'Database.php';
  class ContactModel{
    private $database;

    public function __construct(){
        $this->database = new Database();
    }
    public function insert($prenom, $nom, $telephone){
      $requete = "INSERT INTO contact(prenom, nom, tel) VALUE(?,?,?)";
      $queryprepare = $this->database->getDBB()->prepare($requete);
      // Exécuter la requête 
      $queryprepare->execute(array($prenom, $nom, $telephone));
      //return un boolan
      return($queryprepare);
    }

    public function modifier($id ,$prenom, $nom, $telephone){
      $requete = "UPDATE contact SET  prenom = ?, nom = ?, tel = ? WHERE id = ?";
      $queryprepare = $this->database->getDBB()->prepare($requete);
      // Exécuter la requête 
      $queryprepare->execute(array($prenom, $nom, $telephone, $id));
      //return un boolan
      return($queryprepare); 
    }

    public function supprimer($id){
      $requet = "DELETE FROM contact WHERE id =:iContacte";
      $query = $this->database->getDBB()->prepare($requet);
      $query->bindValue(":iContacte",$id);
      // Exécuter la requête 
      $query->execute();
      //return un boolan
      return($query);
    }
    public function liste(){
      $requet = "SELECT * FROM contact ORDER BY nom";
      $query = $this->database->getDBB()->prepare($requet);
      // Exécuter la requête 
      $query->execute();
      //return un boolan
      return($query->fetchAll());
    }
    public function findContactById($id){
      $query = $this->database->getDBB()->prepare("SELECT * FROM contact WHERE id = ?");
      $query->execute(array($id));
      return($query->fetch());
    }
  }
?>