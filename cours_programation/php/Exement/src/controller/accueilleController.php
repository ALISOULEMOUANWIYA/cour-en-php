<?php
session_start();
//namespace src\controller;
use libs\system\Controller;
use src\model\UserDB;



class accueilleController extends Controller
{
    public $tableau = array("accueille", "login", "tableauBord", "client", "user");

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
            return $this->view->load($this->tableau[1]);
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

    public function Bordtableau()
    {
        return $this->view->load($this->tableau[2]);
    }

    public function userBord()
    {
        return $this->view->load($this->tableau[4]);
    }

    public function ClientBord()
    {
        return $this->view->load($this->tableau[3]);
    }

    public function addUser()
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
                    $reponse = $this->userdao->addUser($this->user->getEmail(), $this->user->getPassword());
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


    public function listeUser()
    {
        $UtilisateurMembre = "";
        if (sizeof($this->userdao->getListeUser()) > 0) {
            foreach ($this->userdao->getListeUser() as $row) {
                $UtilisateurMembre .= '
                        <tr  style="display:none;" class="ligneListes">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input checkboxValidation" type="checkbox" onclick="CheckBoxBtn(' . $row->getId() . ')"  value="" id="defaultCheck2" disabled>
                                    <button class="btn btn-dark rounded-pill shadow" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                        <i class="menu-icon fa fa-eye"></i>
                                    </button>
                                </div>
                            </td>
                            <td>' . $row->getId() . '</td>
                            <td>' . $row->getEmail() . '</td>
                            <td>' . $row->getPassword() . '</td>
                        </tr>
                        ';
            }
        }
        echo $UtilisateurMembre;
    }

    public function listeClient()
    {
        $UtilisateurMembre = "";
        $tableauRoles = $this->userdao->getUser_roles();
        $tableauUser = $this->userdao->getListeUser();
        if (sizeof($tableauUser) > 0) {
            foreach ($tableauUser as $row) {
                for ($i = 0; $i  < count($tableauRoles); $i++) {
                    if ($tableauRoles[$i]["user_id"]  == $row->getId()) {
                        $UtilisateurMembre .= '
                        <tr  style="display:none;" class="ligneListes">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                                    <button class="btn btn-dark rounded-pill shadow" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                        <i class="menu-icon fa fa-eye"></i>
                                    </button>
                                </div>
                            </td>
                            <td>' . $row->getNom() . '</td>
                            <td>' . $row->getPrenom() . '</td>
                            <td>' . $row->getEmail() . '</td>
                            <td>' . ($row->getVillage())->getNom() . '</td>
                            <td>
                                ' . $tableauRoles[$i]["nom"] . '
                            </td>
                            <td>' . ($row->getReglement())->getId() . '</td>
                        </tr>
                        ';
                    }
                }
            }
        }
        echo $UtilisateurMembre;
    }

    public function listeCadreClient()
    {
        $UtilisateurMembre = "";
        $tableauUser = $this->userdao->getListeUser();
        if (sizeof($tableauUser) > 0) {
            foreach ($tableauUser as $row) {
                $UtilisateurMembre .= '
                                   <div style="display:none;" class="col-md-4 ligneCadre">
										<aside class="profile-nav alt">
											<section class="card">
												<div class="card-header user-header alt bg-dark">
													<div class="media">
														<a href="#" class="align-self-center p-2 m-2 btn-light rounded-circle shadow">
															<i class="fa fa-user" style="font-size: 50px" aria-hidden=" true"></i>
														</a>
														<div class="media-body">
															<h5 class="text-light display-6" style="font-size: 14px">' . $row->getEmail() . '</h5>
															<h5 style="font-size: 8px"><i class="fa fa-shield"></i>' . $row->getPassword() . '</h5>
														</div>
													</div>
												</div>
											</section>
										</aside>
									</div>
                        ';
            }
        }
        echo $UtilisateurMembre;
    }

    public function supprimerUser()
    {
        $this->userdao->deleteUser((int) $_SESSION["idUser"]);
    }

    public function LasteIdUser()
    {
        $reponse = "";
        $tableau = $this->userdao->getListeUser();
        $max = 0;
        if (sizeof($tableau) > 0) {
            for ($i = 0; $i  < count(($this->userdao->getListeUser())); $i++) {
                if ($max < ($this->userdao->getListeUser())[$i]->getId()) {
                    $max = ($this->userdao->getListeUser())[$i]->getId();
                }
            }

            if ($max > 0) {
                $_SESSION["lasteIdUser"] = $max;
                $reponse = "Success";
            }
        }
        echo $reponse;
    }
}
