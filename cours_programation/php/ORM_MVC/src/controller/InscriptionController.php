<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\UserDB;

class InscriptionController extends Controller
{
    private $userdao;
    public $tableau = array("accueil", "login", "add", "inscription");
    private $Email;
    private $reglement;
    private $village;
    private $password;
    private $action;
    public function __construct()
    {
        parent::__construct();
        $this->userdao = new UserDB();
        if ($this->Email != "" && $this->password != "") {
            $this->action = "Connection";
        }
    }

    /**
     * http://localhost/projects/lpgl/tpmvc/tpORM/Login/index
     */
    public function index()
    {
        return $this->view->load("accueil");
    }

    /**
     * http://localhost:8081/projects/lpgl/tpmvc/tpORM/Login/logon
     */
    public function logon()
    {
        extract($_POST);
        $this->Nom = $_POST['nom'];
        $this->Prenom = $_POST['prenom'];
        $this->email = $_POST['email'];
        $this->reglement = $_POST['reglement'];
        $this->village = $_POST['village'];
        $this->password = $_POST['password'];
        if ($this->Nom != "" && $this->Prenom != "" && $this->email != "" && $this->password != "") {
            $this->action = "ajouter";
        }
        switch ($this->action) {
            case 'ajouter':
                $string = $this->userdao->ControllerSaisie($this->Nom, $this->Prenom, $this->email, $this->password);
                if ($string !== "") {
                    echo $this->userdao->ControllerSaisie($this->Nom, $this->Prenom, $this->email, $this->password);
                } else {
                    if (is_array($this->userdao->getConnection($this->Email, $this->password))) {
                        $users = $this->userdao->getConnection($this->Email, md5($this->password));
                        if (count($users) != 0) {
                            $user = $users[0];
                            echo "Success";
                        } else {
                            echo "Eamil ou mot de passe est incorecte ";
                        }
                    }
                }

                break;
            default:
                echo "tous les champs sont obligatoir à remplire ☹️ ";
                break;
        }
    }

    /**
     * http://localhost/projects/lpgl/tpmvc/tpORM/Login/login
     */
    public function login()
    {
        return $this->view->load("inscription");
    }

    /*
    * http://localhost/projects/lpgl/tpmvc/tpORM/Login/Inscription
    */
    public function Inscription()
    {
        return $this->view->load("Inscription");
    }

    /**
     * http://localhost/projects/lpgl/tpmvc/tpORM/Login/logout
     */
    public function logout()
    {
    }
}
