<?php
   require_once "signup.php";
  class controllers{
    private $database;
    private $button;
    private $Nom;
    private $Prenom;
    private $Email;
    private $password; 
    private $photo;
      private $distributeur;
      private $action;
      function __construct(){
          $this->distributeur = new signup();

          $this->Nom = $_POST['nom'];
          $this->Prenom = $_POST['prenom'];
          $this->email = $_POST['email']; 
          $this->password = $_POST['password'];
          if($this->Nom != "" && $this->Prenom != "" && $this->email != "" && $this->password != ""){
              $this->action = "ajouter";
          }
      }
      
      public function ContrellersManager(){
        // operation ternaire
        switch ($this->action) {
            case 'ajouter':
                    $this->distributeur->ControllerSaisie($this->Nom, $this->Prenom, $this->email, $this->password);
                break;
            default:
                echo "tous les champs sont obligatoir à remplire ☹️ ";
                break;
        }
      }
  }
$menager = new controllers();
$menager->ContrellersManager();
?>