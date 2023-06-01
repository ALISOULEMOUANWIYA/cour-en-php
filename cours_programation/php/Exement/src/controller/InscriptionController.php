<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\UserDB;

class InscriptionController extends Controller
{
    private $userdao;
    public $tableau = array("accueil", "login", "add", "inscription");
    private $Email;
    private $password;
    private $action;
    public function __construct()
    {
        parent::__construct();
        $this->userdao = new UserDB();
        $this->user = new User();
        if ($this->Email != "" && $this->password != "") {
            $this->action = "Connection";
        }
    }

    /**
     * http://localhost/projects/lpgl/tpmvc/Exement/Login/index
     */
    public function index()
    {
        return $this->view->load("accueil");
    }

    /**
     * http://localhost:8081/projects/lpgl/tpmvc/Exement/Login/logon
     */
    public function logon()
    {
        extract($_POST);
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($email != "" && $password != "") {
            $this->action = "ajouter";
        }
        switch ($this->action) {
            case 'ajouter':
                $this->user->setEmail($email);
                $this->user->setPassword($password);

                $string = $this->userdao->ControllerSaisie($email, $password);
                if ($string !== "") {
                    echo $this->userdao->ControllerSaisie($email, $password);
                } else {
                    $reponse = $this->userdao->addUser($this->user->getEmail(), md5($this->user->getPassword()));
                    if ($reponse == 1) {
                        echo "Success";
                    }
                }
                break;
            default:
                echo "tous les champs sont obligatoir à remplire ☹️ ";
                break;
        }
    }

    /**
     * http://localhost/projects/lpgl/tpmvc/Exement/Login/login
     */
    public function login()
    {
        return $this->view->load("login");
    }

    /*
    * http://localhost/projects/lpgl/tpmvc/Exement/Login/Inscription
    */
    public function Inscription()
    {
        return $this->view->load("Inscription");
    }

    /**
     * http://localhost/projects/lpgl/tpmvc/Exement/Login/logout
     */
    public function logout()
    {
        return $this->view->load("login");
    }
}
