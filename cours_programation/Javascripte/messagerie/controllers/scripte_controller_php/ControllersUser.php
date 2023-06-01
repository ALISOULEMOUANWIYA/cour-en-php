 <?php

  require_once 'config.php';

  class ControllersUser
  {
    private $Utilisateur = "";
    private $UtilisateurMembre = "";
    private $UtilisateurIvitation = "";
    private $tableau;
    private $tableau2;
    private $tableau3;
    private $tableau4;
    private $tableau5;
    private $ListesSerache;

    public function __construct()
    {
      $this->database = new Database();
    }

    public function Listes()
    {
      $requetes = "SELECT * 
                        FROM users 
                        WHERE NOT unique_id = ?";
      $query = $this->database->getDBB()->prepare($requetes);
      $query->execute(array($_SESSION['unique']));
      $this->tableau = $query->fetchAll();
    }

    public function ListesInvitation()
    {
      $requetes = "SELECT * FROM users
                      ORDER BY  unique_id = ?";
      $query = $this->database->getDBB()->prepare($requetes);
      $query->execute(array($_SESSION['unique']));
      $this->tableau4 = $query->fetchAll();
    }

    public function ListesAmi()
    {
      $SupperRequette = "SELECT  j.ID_unque_Amis, j.AmisAjouter, j.idInvitation , f.Demende
                            FROM amies AS j 
                            JOIN acceptation AS f
                            ON j.idInvitation = f.idIviation
                            ORDER BY j.id_Amis";
      $query = $this->database->getDBB()->prepare($SupperRequette);
      $query->execute();
      $this->tableau3 = $query->fetchAll();
    }

    public function ListesAmiAjouter()
    {
      $SupperRequette = "SELECT  idInvitation 
                              FROM amies 
                              WHERE idInvitation = 1";
      $query = $this->database->getDBB()->prepare($SupperRequette);
      $query->execute();
      $this->tableau5 = $query->fetchAll();
    }

    public function ActualiserSuppression($valeur1)
    {
      $SupperRequette = "SELECT   IdInvitation 
                                FROM amies 
                                WHERE IdInvitation = ?";
      $query = $this->database->getDBB()->prepare($SupperRequette);
      $query->execute(array($valeur1));

      return ($query->fetchAll());
    }


    public function SuppressionReffu($valeur)
    {
      $Supprimerrequete = "DELETE 
                                  FROM amies
                                  WHERE ID_unque_Amis = ?
                                  AND IdInvitation = ?";
      $queryprepare = $this->database->getDBB()->prepare($Supprimerrequete);
      // Exécuter la requête 
      $queryprepare->execute(array($_SESSION['unique'],  $valeur));
    }

    public function SuppressionAmiAjouter($IdAmis, $valeurIdInDemande)
    {
      $Supprimerrequete = "DELETE 
                          FROM amies 
                          WHERE (ID_unque_Amis = ? AND   AmisAjouter = ? AND IdInvitation = ?)
                              OR (ID_unque_Amis = ? AND   AmisAjouter = ? AND IdInvitation = ?)
                          ";
      $queryprepare = $this->database->getDBB()->prepare($Supprimerrequete);
      // Exécuter la requête 
      $queryprepare->execute(array($_SESSION['unique'], $IdAmis, $valeurIdInDemande, $IdAmis, $_SESSION['unique'],  $valeurIdInDemande));
    }

    public function Actualiser($valeur)
    {
      if ($this->ActualiserSuppression($valeur) == true) {
        $this->SuppressionReffu($valeur);
      } else {
        return (0);
      }
    }
    public function VerificationAppartenance($ValeurSession, $Valeur)
    {
      $AmisRequette = "SELECT   ID_unque_Amis, AmisAjouter, IdInvitation 
                              FROM amies 
                              WHERE (ID_unque_Amis = ? AND   AmisAjouter = ?)
                              OR (ID_unque_Amis = ? AND   AmisAjouter = ?)";
      $query = $this->database->getDBB()->prepare($AmisRequette);
      $query->execute(array($ValeurSession, $Valeur, $Valeur, $ValeurSession));
      return ($query->fetch());
    }
    public function Verification($ValeurSession, $Valeur)
    {
      $SupperRequette = "SELECT   ID_unque_Amis, AmisAjouter 
                          FROM amies 
                          WHERE ID_unque_Amis = ?
                          AND   AmisAjouter = ?";
      $query = $this->database->getDBB()->prepare($SupperRequette);
      $query->execute(array($ValeurSession, $Valeur));
      return ($query->fetch());
    }

    public function VerificationInvitation($valeur1, $Valeur2, $valeurDemande)
    {
      $SupperRequette = "SELECT   ID_unque_Amis, AmisAjouter 
                          FROM amies 
                          WHERE ID_unque_Amis = ?
                          AND   AmisAjouter = ?
                          AND IdInvitation = ?";
      $query = $this->database->getDBB()->prepare($SupperRequette);
      $query->execute(array($valeur1, $Valeur2, $valeurDemande));
      return ($query->fetch());
    }

    public function VerificationAmis($ValeurSession, $Valeur, $valeur2)
    {
      $AmisRequette = "SELECT   ID_unque_Amis, AmisAjouter, IdInvitation 
                          FROM amies 
                          WHERE (AmisAjouter = ? AND   ID_unque_Amis = ?  AND IdInvitation = ?)
                          OR (ID_unque_Amis = ? AND   AmisAjouter = ?  AND IdInvitation = ?)
                        ";
      $query = $this->database->getDBB()->prepare($AmisRequette);
      $query->execute(array($Valeur, $ValeurSession, $valeur2, $ValeurSession, $Valeur, $valeur2));
      return ($query->fetch());
    }

    public function SupprimerDemandeEntrant($ID_unque_Amis, $IdInvitation)
    {
      $SupprimerDemande = "DELETE 
                              FROM amies
                              WHERE ID_unque_Amis = ? AND AmisAjouter = ? AND IdInvitation = ?";
      $queryprepare = $this->database->getDBB()->prepare($SupprimerDemande);
      // Exécuter la requête 
      $queryprepare->execute(array($ID_unque_Amis, $_SESSION['unique'], $IdInvitation));
    }
    public function SupprimerDemandeSortant($ID_unque_Amis)
    {
      $Supprimerrequete = "DELETE 
                              FROM amies
                              WHERE ID_unque_Amis = ? AND AmisAjouter = ?";
      $queryprepare = $this->database->getDBB()->prepare($Supprimerrequete);
      // Exécuter la requête 
      $queryprepare->execute(array($ID_unque_Amis, $_SESSION['unique']));
    }

    public function Modiffier($IdInvitation, $ID_unque_Amis)
    {
      $requete = "UPDATE amies
                      SET IdInvitation  = ?
                      WHERE ID_unque_Amis = ? AND AmisAjouter = ?";
      $queryprepare = $this->database->getDBB()->prepare($requete);
      // Exécuter la requête 
      $queryprepare->execute(array($IdInvitation, $ID_unque_Amis, $_SESSION['unique']));
    }

    public function AccepterMembreAmi($IdInvitation, $ID_unque_Amis)
    {
      if ($this->Verification($_SESSION['unique'], $ID_unque_Amis) == false) {
        $this->Modiffier($IdInvitation, $ID_unque_Amis);
      } else {
        $this->Modiffier($IdInvitation, $ID_unque_Amis);
        $this->SupprimerDemandeSortant($ID_unque_Amis);
      }
    }

    public function AjouterMembreAmi($ID_unque_Amis,  $IdInvitation)
    {
      $requete = "INSERT INTO amies(ID_unque_Amis, AmisAjouter, IdInvitation) 
                          VALUE(?,?,?)";
      $queryprepare = $this->database->getDBB()->prepare($requete);
      // Exécuter la requête 
      $queryprepare->execute(array($_SESSION['unique'],  $ID_unque_Amis, $IdInvitation));
      echo "Envoyer";
    }

    public function get_courtMessage($Courte)
    {
      $requete = "SELECT * FROM messages
            WHERE (incoming_msg_id = ? OR outgoing_msg_id = ?) ORDER BY msg_id DESC LIMIT 1";
      $queryprepare = $this->database->getDBB()->prepare($requete);
      // Exécuter la requête 
      $queryprepare->execute(array($Courte, $Courte));
      $this->setMessage($queryprepare->fetch());
    }

    public function Comptes()
    {
      $i = 0;
      $this->Listes();

      if (sizeof($this->getListes()) > 0) {
        foreach ($this->getListes() as $row) {
          $i += 1;
          if ($this->VerificationAppartenance($_SESSION['unique'], $row['unique_id']) == false) {
            $this->UtilisateurMembre .= "            <div class='list user_list_membre" . $i . "'>
                        <div class='membrePersonne membre" . $i . "'>
                          <div class='content'>
                          <img  src='assets/images/" . $row['img'] . "' class='details' alt=''>
                          <div class='UserNom details'>
                              <span class='UserFnam'>" . $row['fname'] . "</span>
                              <span class='UserLnam'>" . $row['lname'] . "</span>
                          </div>
                          </div>
                          <div class='choixAction action" . $i . "'>
                              <span style='position : absolute; visibility: hidden; bottom: 12px;' class='IDuniqueMembre MembreUnique" . $i . "'>" . $row['unique_id'] . "</span>
                              <button onclick='faitAction(" . $i . ")' class='ajouter boutton" . $i . "'>Ajouter<i class='fa fa-plus-circle' aria-hidden='true' ></i></button>
                          </div>
                        </div>  
                    </div>";
          }
        }
      }
      echo $this->UtilisateurMembre;
    }

    public function MesAmis()
    {
      $i = 0;
      $this->Listes();

      if (sizeof($this->getListes()) > 0) {
        foreach ($this->getListes() as $row) {
          $i += 1;
          if ($this->VerificationAmis($row['unique_id'], $_SESSION['unique'],  1) == true) {
            $this->UtilisateurMembre .= "            <div class='list user_list_Amis" . $i . "'>
                        <div class='AmisPersonne AmisAjouter" . $i . "'>
                          <div class='content'>
                          <img  src='assets/images/" . $row['img'] . "' class='details' alt=''>
                          <div class='UserNom details'>
                              <span class='UserFnam'>" . $row['fname'] . "</span>
                              <span class='UserLnam'>" . $row['lname'] . "</span>
                          </div>
                          </div>
                          <div class='choixAction action" . $i . "'>
                              <span style='position : absolute; visibility: hidden; bottom: 12px;' class='IDuniqueMembre InvitationUnique" . $i . "'>" . $row['unique_id'] . "</span>
                              <div name='Demande' class='idDemande ListeButton'>
                                <Button onclick='faitActionAccepter3(" . $i . ")' class='button3' value='3'><i class='fa fa-trash-o' aria-hidden='true' ></i></Button>
                              </div>
                          </div>
                        </div>  
                    </div>";
          }
        }
      }
      echo $this->UtilisateurMembre;
    }

    public function ComptesInvitation()
    {
      $i = 0;
      $this->Listes();

      if (sizeof($this->getListes()) > 0) {
        foreach ($this->getListes() as $row) {
          $i += 1;
          if ($this->VerificationInvitation($row['unique_id'], $_SESSION['unique'],  2) == true) {
            $this->UtilisateurIvitation .= "            <div class='listInvt user_list_invitation" . $i . "'>
                      <div class='invitationPersonne invitation" . $i . "'>
                        <div class='content'>
                          <img  src='assets/images/" . $row['img'] . "' class='details' alt=''>
                          <div class='UserNom details'>
                              <span class='UserFnam'>" . $row['fname'] . "</span>
                              <span class='UserLnam'>" . $row['lname'] . "</span>
                          </div>
                        </div>
                        <div class='choixAction actionSup" . $i . "'>
                            <span style='position : absolute; visibility: hidden; bottom: 12px;' class='IDuniqueInvitation InvitationUnique" . $i . "'>" . $row['unique_id'] . "</span>
                            <div name='Demande' class='idDemande ListeButton'>
                                <Button onclick='faitActionAccepter1(" . $i . ")' class='button1' value='1'><i class='fa fa-plus' aria-hidden='true' ></i></Button>
                                <Button onclick='faitActionAccepter2(" . $i . ")' class='button2' value='3'><i class='fa fa-trash-o' aria-hidden='true' ></i></Button>
                            </div>
                        </div>
                      </div>  
                  </div>";
          } else if ($this->VerificationInvitation($_SESSION['unique'], $row['unique_id'],  2) == true) {
            $this->UtilisateurIvitation .= "            <div class='listInvt user_list_invitation" . $i . "'>
                      <div class='invitationPersonne invitation" . $i . "'>
                        <div class='content'>
                          <img  src='assets/images/" . $row['img'] . "' class='details' alt=''>
                          <div class='UserNom details'>
                              <span class='UserFnam'>" . $row['fname'] . "</span>
                              <span class='UserLnam'>" . $row['lname'] . "</span>
                          </div>
                        </div>
                        <div class='choixAction action" . $i . "'>
                            <div class='invitationAttente'>
                                <p>En attente</p>
                            </div>
                        </div>
                      </div>  
                  </div>";
          }
        }
      }
      echo $this->UtilisateurIvitation;
    }

    public function listesDiscussion()
    {

      $resultatNombre_ID = 0;
      // $i=0;
      $this->Listes();

      if (sizeof($this->getListes()) > 0) {
        foreach ($this->getListes() as $row) {
          if ($this->VerificationAmis($row['unique_id'], $_SESSION['unique'],  1) == true) {
            $this->get_courtMessage($row['unique_id']);
            if (is_array($this->getMessage())) {
              if (sizeof($this->getMessage()) > 0) {
                $resultat = $this->getMessage()['msg'];
                $resultatNombre_ID = $this->getMessage()['outgoing_msg_id'];
              } else {
                $resultat = "Aucun message disponible";
              }
            } else {
              $resultat = "Aucun message disponible";
            }
            // Obtenire un message courte
            (strlen($resultat) > 28) ? $msg = substr($resultat, 0, 28) . '...' : $msg = $resultat;
            // ajouter distributeur
            ($_SESSION['ID_unique'] == $resultatNombre_ID) ? $you = "Vous : " : $you = " ";
            // Verification connexion instentaner 
            ($row['status'] == "hors ligne maintenant") ? $offline = "offline" : $offline = "";
            $this->Utilisateur .= '<a href="index.php?view=chat&user_id=' . $row['unique_id'] . '">
                      <div class="content">
                        <img src="#" alt="">
                        <div class="details">
                          <span>' . $row['fname'] . " " . $row['lname'] . '</span>
                        <p>' . $you . " " . $msg . '</p>
                      </div>
                      </div>
                      <div class="status-dot ' . $offline . '">
                        <i class="fa fa-circle" aria-hidden="true"></i>
                      </div>
                    </a>';
          }
        }
      }

      echo $this->Utilisateur;
    }

    //Les GETTER
    public function getListes()
    {
      return ($this->tableau);
    }
    public function getIvitation()
    {
      return ($this->tableau4);
    }
    public function getListeAmi()
    {
      return ($this->tableau3);
    }
    public function getListesAmiAjouter()
    {
      return ($this->tableau5);
    }
    public function getMessage()
    {
      return ($this->tableau2);
    }

    //Les SETTER
    public function setListes($valeur)
    {
      $this->tableau = $valeur;
    }
    public function setMessage($valeur)
    {
      $this->tableau2 = $valeur;
    }
  }
  ?>