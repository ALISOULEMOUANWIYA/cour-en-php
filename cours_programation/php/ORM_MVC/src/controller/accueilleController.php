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
        $this->Reglement = new Reglement();
        $this->Village = new Village();
        $this->Roles = new Roles();
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
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $reglement = $_POST['reglement'];
        $village = $_POST['village'];
        $password = $_POST['password'];
        $rolesUser = $_POST['rolesUser'];
        if ($nom != "" && $prenom != "" && $email != "" && $reglement != "" && $village != "" && $rolesUser != "" && $password != "") {
            $this->action = "ajouter";
        }
        switch ($this->action) {
            case 'ajouter':
                $this->user->setReglement($reglement);
                $this->user->setNom($nom);
                $this->user->setPrenom($prenom);
                $this->user->setEmail($email);
                $this->user->setPassword($password);
                $this->user->setVillage($village);
                $this->user->setRoles($rolesUser);

                $string = $this->userdao->ControllerSaisie($email, $password);
                if ($string !== "") {
                    echo $this->userdao->ControllerSaisie($email, $password);
                } else {
                    // echo $this->Reglement->getId() instanceof Village;
                    $_SESSION["getRoles"] = (int)$this->user->getRoles();
                    $reponse = $this->userdao->addUser($this->user->getReglement(), $this->user->getNom(), $this->user->getPrenom(), $this->user->getEmail(), $this->user->getPassword(), $this->user->getVillage());
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

    public function addRolesUser()
    {
        $this->userdao->addRolesUser((int)$_SESSION["lasteIdUser"], (int)$_SESSION["getRoles"]);
    }

    public function listeReglement()
    {
        $UtilisateurMembre = "";

        $UtilisateurMembre = "";
        if (sizeof($this->userdao->getListeReglement()) > 0) {
            foreach ($this->userdao->getListeReglement() as $row) {
                $UtilisateurMembre .= '
                    <li onclick="faitActionRegelement(' . $row->getId() . ')" class="text-center"><a class="dropdown-item bg-dark  text-white rounded-pill shadow mb-1 modal-footer regle' . $row->getId() . ' " href="#">' . $row->getNom() . '</a></li>
                    ';
            }
        }
        echo $UtilisateurMembre;
    }

    public function listeRoles()
    {
        $UtilisateurMembre = "";

        $UtilisateurMembre = "";
        if (sizeof($this->userdao->getListeRoles()) > 0) {
            foreach ($this->userdao->getListeRoles() as $row) {
                $UtilisateurMembre .= '
                    <li onclick="faitActionRoles(' . $row->getId() . ')" class="text-center"><a class="dropdown-item bg-dark  text-white rounded-pill shadow mb-1 modal-footer regle' . $row->getId() . ' " href="#">' . $row->getNom() . '</a></li>
                    ';
            }
        }
        echo $UtilisateurMembre;
    }

    public function listeVillage()
    {
        $UtilisateurMembre = "";

        $UtilisateurMembre = "";
        if (sizeof($this->userdao->getListeVillage()) > 0) {
            foreach ($this->userdao->getListeVillage() as $row) {
                $UtilisateurMembre .= '
                    <li onclick="faitActionVillage(' . $row->getId() . ')" class="text-center"><a class="dropdown-item bg-dark  text-white rounded-pill shadow mb-1 modal-footer regle' . $row->getId() . ' " href="#">' . $row->getNom() . '</a></li>
                    ';
            }
        }
        echo $UtilisateurMembre;
    }

    public function listeUser()
    {
        $UtilisateurMembre = "";
        $tableau = $this->userdao->getUser_roles();
        if (sizeof($this->userdao->getListeUser()) > 0) {
            foreach ($this->userdao->getListeUser() as $row) {
                for ($i = 0; $i  < count($tableau); $i++) {
                    if ($tableau[$i]["user_id"]  == $row->getId()) {
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
                            <td>' . $row->getNom() . '</td>
                            <td>' . $row->getPrenom() . '</td>
                            <td>' . $row->getEmail() . '</td>
                            <td>' . ($row->getVillage())->getNom() . '</td>
                            <td>
                                ' . $tableau[$i]["nom"] . '
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
        $tableauRoles = $this->userdao->getUser_roles();
        $tableauUser = $this->userdao->getListeUser();
        if (sizeof($tableauUser) > 0) {
            foreach ($tableauUser as $row) {
                for ($i = 0; $i  < count($tableauRoles); $i++) {
                    if ($tableauRoles[$i]["user_id"]  == $row->getId()) {
                        $UtilisateurMembre .= '
                                   <div style="display:none;" class="col-md-4 ligneCadre">
										<aside class="profile-nav alt">
											<section class="card">
												<div class="card-header user-header alt bg-dark">
													<div class="media">
														<a href="#" class="align-self-center p-2 m-2 btn-light rounded-circle shadow">
															<i class="fa fa-user" style="font-size: 100px" aria-hidden=" true"></i>
														</a>
														<div class="media-body">
															<h2 class="text-light display-6">' . $row->getNom() . " " . $row->getPrenom() . '</h2>
															<p><i class="fa fa-shield"></i>' . $tableauRoles[$i]["nom"] . '</p>
														</div>
													</div>
												</div>
												<ul class="list-group list-group-flush">
													<li class="list-group-item">
														<a href="#"> <i class="fa fa-envelope-o"></i>' . $row->getEmail() . '</a>
													</li>
													<li class="list-group-item">
														<a href="#"> <i class="fa fa-home"></i>' . ($row->getVillage())->getNom() . '</a>
													</li>
													<li class="list-group-item">
														<a href="#"> <i class="fa fa-legal"></i>Reglement N°' . ($row->getReglement())->getId() . '</a>
													</li>
													<li class="list-group-item">
														<a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">03</span></a>
													</li>
													<li class="list-group-item">
														<div class="row">
															<div class="col-sm-8">
																<button class="btn btn-warning actualiserbtn rounded-pill shadow">
																	<i class="menu-icon fa fa-eye"></i>
																</button>
																<button class="btn btn-dark rounded-pill shadow">
																	<i class="menu-icon fa fa-pencil-square-o"></i>
																</button>
																<button class="btn btn-danger  rounded-pill shadow"  onclick="faitActionS(' . $row->getId() . ' )">
																	<i class="menu-icon fa fa-trash"></i>
																</button>
																<button class="btn btn-secondary actualiserbtn rounded-pill shadow">
																	<i class="menu-icon fa fa-envelope"></i>
																</button>
															</div>
														</div>
													</li>
												</ul>
											</section>
										</aside>
									</div>
                        ';
                    }
                }
            }
        }
        echo $UtilisateurMembre;
    }

    public function supprimerUser()
    {
        $this->userdao->deleteUser((int) $_SESSION["idUser"]);
    }

    public function supprimerRolesUser()
    {
        $_SESSION["idUser"] = $_GET["idUser"];
        $this->userdao->deleteRoleUser((int) $_SESSION["idUser"]);
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
