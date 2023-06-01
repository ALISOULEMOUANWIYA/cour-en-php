<?php
require_once "Chat_Id.php";
require_once "Login.php";
class controllersLogin
{
  private $Email;
  private $password;
  private $distributeur;
  private $action;
  private $tailleTableau = 0;
  private $statusUser;
  function __construct()
  {
    $this->distributeur = new Login();
    $this->statusUser = "Active maintenant";
    $this->Email = $_POST['email'];
    $this->password = $_POST['password'];
    if ($this->Email != "" && $this->password != "") {
      $this->action = "Connection";
    }
  }

  public function ContrellersManager()
  {
    switch ($this->action) {
      case 'Connection':
        $this->distributeur->ControllerSaisie($this->Email, $this->password);
        if (is_array($this->distributeur->getComptes())) {
          session_start();
          $_SESSION['unique'] = $this->distributeur->getComptes()['unique_id'];
          $compteUser = new Chat_Id();
          if ($compteUser->decon_OR_Conne($this->statusUser, $_SESSION['unique'])) {
            //                        echo "Success :".$this->statusUser;
            echo "Success";
          }
        } else {
          echo "Eamil ou mot de passe incorecte ";
        }
        break;
      default:
        echo "tous les champs sont obligatoir à remplire ☹️ ";
        break;
    }
  }
}
$menager = new controllersLogin();
$menager->ContrellersManager();
