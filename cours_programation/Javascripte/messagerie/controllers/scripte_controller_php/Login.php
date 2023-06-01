 <?php
  require_once 'config.php';

  class Login
  {
    private $comptes;
    public function __construct()
    {
      $this->database = new Database();
    }
    public function ControllerSaisie($email, $password)
    {
      if (!empty($email)  && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $this->connecter($email, $password);
        }
      } else {
        echo  "Tous les champs sont obligatoirs";
      }
    }
    public function connecter($email, $password)
    {
      $requete = "SELECT * from users where email = ? and password = ?";
      $queryprepare = $this->database->getDBB()->prepare($requete);
      // Exécuter la requête 
      $queryprepare->execute(array($email, $password));
      $this->comptes = $queryprepare->fetch();
    }
    public function getComptes()
    {
      return ($this->comptes);
    }
  }
  ?>