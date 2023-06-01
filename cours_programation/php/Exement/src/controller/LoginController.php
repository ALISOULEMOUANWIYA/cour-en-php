<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\UserDB;

class LoginController extends Controller
{
    private $userdao;
    public $tableau = array("accueille", "login", "Inscription", "add");
    private $Email;
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
     * http://localhost:8081/projects/lpgl/tpmvc/tpORM/Login/index
     */
    public function index()
    {
        session_start();
        $_SESSION["view"] = $_GET['view'];
        if ($_SESSION["email"] != "" && $_SESSION["password"] != "") {
            echo $this->tableau[0];
        } else {
            echo $this->tableau[1];
        }
    }


    /**
     * http://localhost:8081/projects/lpgl/tpmvc/tpORM/Login/logon
     */
    public function logon()
    {
        session_start();
        extract($_POST);
        $this->Email = $_POST['email'];
        $this->password = $_POST['password'];
        if ($this->Email != "" && $this->password != "") {
            $this->action = "Connection";
            $_SESSION["email"] = $this->Email;
            $_SESSION["password"] = $this->password;
        }
        switch ($this->action) {
            case 'Connection':
                $string = $this->userdao->ControllerSaisie($this->Email, $this->password);
                if ($string !== "") {
                    echo $string;
                } else {
                    if (is_array($this->userdao->getConnection($this->Email, md5($this->password)))) {
                        //$users = $this->userdao->getConnection($this->Email, md5($this->password));
                        $users = $this->userdao->getConnection($this->Email, md5($this->password));
                        if (count($users) != 0) {
                            echo "Success";
                        } else {
                            echo "Eamil ou mot de passe est incorecte ";
                        }
                    }
                }

                break;
            default:
                echo "tous les champs sont obligatoir à remplire ☹️ ";
                session_unset();
                break;
        }
    }

    public function UserCompte()
    {
        extract($_POST);
        $this->Email = $_POST['email'];
        $this->password = $_POST['password'];
        echo $this->userdao->getConnection($this->Email, $this->password)[0]->getId();
    }

    /**
     * http://localhost/projects/lpgl/tpmvc/tpORM/Login/login
     */
    public function login()
    {
        session_start();
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
        return $this->view->load($this->tableau[1]);
    }

    /*
    * http://localhost/projects/lpgl/tpmvc/tpORM/Login/Inscription
    */
    public function Inscription()
    {
        return $this->view->load($this->tableau[2]);
    }

    /**
     * http://localhost/projects/lpgl/tpmvc/tpORM/Login/logout
     */
    public function logout()
    {
    }
}
