<?php
session_start();
//namespace src\controller;
use libs\system\Controller;
use src\model\UserDB;



class accueilleController extends Controller
{
    public $tableau = array("accueillePage", "compteUserController", "login");

    private $action;
    public function __construct()
    {
        $this->userdao = new UserDB();
        $this->user = new User();
        parent::__construct();
    }

    /**
     * http://localhost:8081/projects/lpgl/tpmvc/tpORM/accueille
     */
    public function accueille()
    {
        if (!isset($_SESSION["view"])) {
            return $this->view->load($this->tableau[2]);
        } else {
            return $this->view->load($this->tableau[0]);
        }
    }

    public function UserCompte()
    {
        $_SESSION["email"];
        $_SESSION["password"];
        echo $this->userdao->getConnection($_SESSION["email"], $_SESSION["password"])[0]->getId();
    }

    /**
     * http://localhost:8081/projects/lpgl/tpmvc/tpORM/accueille
     */
    public function compteUser()
    {
        return $this->view->load($this->tableau[1]);
    }
}
