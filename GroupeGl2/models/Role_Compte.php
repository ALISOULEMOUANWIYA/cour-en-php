<?php 
    require_once 'datasource.php';
    class Role{
            // Propriétés
                private  $tabRole;
                private $exec; 

            // le constructeur
                function __construct(){
                    $requete = 'SELECT * FROM compte_role';
                    global $BDD; // acces a la variable ds definie dans datasource.php
                    //executer la requete
                    $exec = $BDD->query($requete);
                    //recuperation de l'execution de la requete
                    $this->tabRole = $exec->fetchAll();
    //                return $tabDomaines;

                }

              // les commitateur
               function get_Role(){
                    return($this->tabRole);
                } 

    }
    class AddressP{
            // Propriétés
                private  $tabAddress;
                private $exec; 

            // le constructeur
                function __construct(){
                    $requete = 'SELECT * FROM addresseutill';
                    global $BDD; // acces a la variable ds definie dans datasource.php
                    //executer la requete
                    $exec = $BDD->query($requete);
                    //recuperation de l'execution de la requete
                    $this->tabAddress = $exec->fetchAll();
    //                return $tabDomaines;

                }

              // les commitateur
               function get_Addresse(){
                    return($this->tabAddress);
                } 

    }
    class Genreutilisateur{
            // Propriétés
                private  $tabGenre;
                private $exec; 

            // le constructeur
                function __construct(){
                    $requete = 'SELECT * FROM genre';
                    global $BDD; // acces a la variable ds definie dans datasource.php
                    //executer la requete
                    $exec = $BDD->query($requete);
                    //recuperation de l'execution de la requete
                    $this->tabGenre = $exec->fetchAll();
    //                return $tabDomaines;

                }

              // les commitateur
               function get_Genre(){
                    return($this->tabGenre);
                }  
    }
    class Ajoutecomptegerant{
             private $nom;
             private $prenom;
             private $email;
             private $naissance;
             private $genre;
             private $telephone;
             private $address;
             private $roleCompte;
             private $motDePasse;
        //------------------------------ 
             private $matricule;
             private $codeIdet;
             private $dateInscrit;
             private $age;
        //------------------------------ 
             private $errNom;
             private $errPrenom;
             private $errEmail;
             private $errNaissance;
             private $errGenre;
             private $errTelephone;
             private $errAddress;
             private $errRoleCompte;
             private $errMotDePasse;

            function __construct($nomComp, $prenomComp, $emailComp, $naissanceComp,  $genreComp, $telephoneComp, $addressComp, $roleCompteComp, $motDePasseComp){
            $nom = $prenom = $email = $naissance =  $genre = $telephone = $address = $roleCompte = $motDePasse = $matricule = $codeIdet = $dateInscrit = $age = ""; 
            $errNom = $errPrenom = $errEmail =  $errGenre = $errTelephone = $errAddress = $errRoleCompte = $errMotDePasse = "";

              if($nomComp !="" && $prenomComp !="" && $emailComp !="" && $naissanceComp !="" && $genreComp !="" && $telephoneComp !="" && $addressComp !="" && $roleCompteComp !="" && $motDePasseComp !=""){ 
                    if ($nomComp != ""){  
                        $this->nom = $nomComp;
                        // verifier si le nom ne contient que des lettre et des espaces
                        if(!preg_match("/^[a-zA-Z-' ]*$/",$nomComp)){
                         $errNom = "Champ nom non saisie";    
                        }   
                    }else{
                        $this->nom = "";
                        $errNom = "Champ nom non saisie";
                    }
        //------------------------------ 
                    if ($prenomComp != ""){
                        $this->prenom = $prenomComp;   
                        // verifier si le prennom ne contient que des lettre et des espaces
                        if(!preg_match("/^[a-zA-Z-' ]*$/",$prenomComp)){
                         $errPrenom = "Champ nom non saisie";    
                        }

                    }else{   
                        $this->prenom = "";
                        $errPrenom = "Champ nom non saisie";
                    }
        //------------------------------ 
                    if ($emailComp != ""){
                        $this->email = $emailComp;  
                        //vérifier si l'adresse e-mail est bien formée
                        if(!filter_var($emailComp, FILTER_VALIDATE_EMAIL)){
                            $errEmail = "Champ E-mail non saisie";
                        }  
                    }else{ 
                        $this->email = "";
                        $errEmail = "";
                    }
        //------------------------------ 
                    if ($naissanceComp != ""){
                        $this->naissance = $naissanceComp;
                    }else{
                        $this->naissance = "";
                    }
        //------------------------------ 
                    if ($genreComp != ""){
                        $this->genre = $genreComp;
                    }else{ 
                        $errGenre = "Choisisez au moin un genre";
                    }
        //------------------------------ 
                   if ($telephoneComp != ""){
                        $this->telephone = $telephoneComp;
                        if(!strlen($telephoneComp) != 9 && (int)$telephoneComp){
                            $errTelephone = "Saisisez un numero de télèphone à 9 caracteres";
                        }
                    }else{
                       $errTelephone = "Saisisez un numero de télèphone à 9 caracteres";
                    }
        //------------------------------ 
                   if ($addressComp != ""){
                        $this->address = $addressComp;
                    }else{
                       $erraddress = "Choisissez au moin une address";
                    }
        //------------------------------ 
                   if ($roleCompteComp != ""){
                       $this->roleCompte = $roleCompteComp;
                    }else{
                        $errRoleCompte = "choisissez au moin un genre";
                    }
        //------------------------------ 
                   if ($motDePasseComp != ""){
                       $this->motDePasse = $motDePasseComp;
                    }else{
                       $errMotDePasse = "Saisissez au moin un mot de passe ";
                    }

            }
//            echo $nom." ".$prenom." ".$email." ".$naissance." ".$genre." ".$telephone." ".$address." ".$roleCompte." ".$motDePasse."ok";

        }


        //-------les commotateur
        function getNom(){
            return($this->nom);
        }    
        function getPrenom(){
            return($this->prenom);
        }    
        function getEmail(){
            return($this->email);
        }    
        function getNaissance(){
            return($this->naissance);
        }    
        function getGenre(){
            return($this->genre);
        }    
        function getTelephone(){
            return($this->telephone);
        }    
        function getaddresse(){
            return($this->address);
        }    
        function getRole(){
            return($this->roleCompte);
        }    
        function getPassword(){
            return($this->motDePasse);
        }
        /********************************/
        function getMatricule(){
            return($this->matricule);
        }
        function getCodeIdet(){
            return($this->codeIdet);
        }
        function getDateInscrit(){
            return($this->dateInscrit);
        }
        function getAge(){
            return($this->age);
        }
        /********************************/

        //-------les accesseur
        function setMatricule($valeurMat){
            $this->matricule = $valeurMat;
        }
        function setCodeIdet($valeurCode){
            $this->codeIdet = $valeurCode;
        }
        function setDateInscrit($valeurdateInsc){
            $this->dateInscrit = $valeurdateInsc;
        }
        function setAge($valeurAge){
            $this->age = $valeurAge;
        }
    }
    class AjouteCoffre{
             private $datedebut;
             private $datefin;
             private $durer;
             private $cotisation;
             private $nombreadherant;
             private $montant;
             private $contacte;
        //------------------------------ 

            function __construct($datedebutCoffres, $datefinCoffres, $cotisationCoffres, $nombreadherantCoffres, $montant, $contacteCoffres){
                 $this->datedebut = $datedebutCoffres;
                 $this->datefin = $datefinCoffres;
                 $this->cotisation = $cotisationCoffres;
                 $this->nombreadherant = $nombreadherantCoffres;
                 $this->montant = $montant;
                 $this->contacte = $contacteCoffres;
        }
        //-------les commotateur
        function getDateDebut(){
            return($this->datedebut);
        }    
        function getDateFin(){
            return($this->datefin);
        } 
        /***************************************/
        function getDure(){
            return($this->durer);
        }
        function setDure($valeurDurer){
            $this->durer = $valeurDurer;
        }
        /****************************************/
        function getCotisation(){
            return($this->cotisation);
        }    
        function getNombreadherant(){
            return($this->nombreadherant);
        }    
        function getMontant(){
            return($this->montant);
        }    
        function getContacte(){
            return($this->contacte);
        }
    }
    class AjouteCompteUtilisateur{
             private $prenomUtil;
             private $NomUtil;
             private $AddressEmailUtil;
             private $PasseWordUtil;
             private $CleCofres1;
             private $CleCofres2;
            function __construct($Prenom_Compte, $Nom_Compte, $Address_Email_Compte, $PassWord_Compte){
                $prenomUtil = $NomUtil = $AddressEmailUtil = $PasseWordUtil = "";
                $CleCofres1 = $CleCofres2 = 0;
                    if ($Nom_Compte != ""){  
                        $this->NomUtil = $Nom_Compte;
                        // verifier si le nom ne contient que des lettre et des espaces
                        if(!preg_match("/^[a-zA-Z-' ]*$/",$Nom_Compte)){
                           $this->NomUtil = "";    
                        }   
                    }else{
                        $this->NomUtil  = "";
                    }
        //------------------------------ 
                    if ($Prenom_Compte != ""){
                        $this->prenomUtil = $Prenom_Compte;   
                        // verifier si le prennom ne contient que des lettre et des espaces
                        if(!preg_match("/^[a-zA-Z-' ]*$/",$Prenom_Compte)){
                           $this->prenomUtil = "";    
                        }

                    }else{   
                        $this->prenomUtil = "";
                    }
        //------------------------------ 
                    if ($Address_Email_Compte != ""){
                        $this->AddressEmailUtil = $Address_Email_Compte;  
                        //vérifier si l'adresse e-mail est bien formée
                        if(!filter_var($Address_Email_Compte, FILTER_VALIDATE_EMAIL)){
                            $this->AddressEmailUtil = "";
                        }  
                    }else{ 
                        $this->AddressEmailUtil = "";
                    }
            //------------------------------ 
                   if ($PassWord_Compte != ""){
                       $this->PasseWordUtil = $PassWord_Compte;
                    }else{
                       $this->PasseWordUtil = "";
                    }
        }
        //-------les commotateur
        function getPrenomt(){
            return($this->prenomUtil);
        }    
        function getNom(){
            return($this->NomUtil);
        } 
        function getAddressEmail(){
            return($this->AddressEmailUtil);
        }    
        function getPasseWordUtil(){
            return($this->PasseWordUtil);
        }    
        /***************************************/
        function getCle1(){
            return($this->CleCofres1);
        }
        function setCle1($valeurCoffres1){
            $this->CleCofres1 = $valeurCoffres1;
        }
        function getCle2(){
            return($this->CleCofres2);
        }
        function setCle2($valeurCoffres2){
            $this->CleCofres2 = $valeurCoffres2;
        }
        /****************************************/
    }
    class CompteUtilisateur{
            // Propriétés
                private  $tabCompte;
                private $exec; 

            // le constructeur
                function __construct($nomCompt, $password){
                    $requete = "SELECT * FROM compte_utilisateur where Nom_Compte='$nomCompt' And  PassWord_Compte='$password'";
                    global $BDD; // acces a la variable ds definie dans datasource.php
                    //executer la requete
                    $exec = $BDD->query($requete);
                    //recuperation de l'execution de la requete
                    $this->tabCompte = $exec->fetchAll();
    //                return $tabDomaines;

                }

              // les commitateur
               function get_Compte(){
                    return($this->tabCompte);
                } 

    }
    class CompteGerant{
            // Propriétés
                private  $tabCompte;
                private $exec; 

            // le constructeur
                function __construct($nomCompt, $password){
                    $requete = "SELECT * FROM compte_gerant where Nom_Gerant='$nomCompt' And  PassWord_Gerant='$password'";
                    global $BDD; // acces a la variable ds definie dans datasource.php
                    //executer la requete
                    $exec = $BDD->query($requete);
                    //recuperation de l'execution de la requete
                    $this->tabCompte = $exec->fetchAll();
    //                return $tabDomaines;

                }

              // les commitateur
               function get_Compte(){
                    return($this->tabCompte);
                } 

    }
    class ModifierClerUtilisateur{
            // Propriétés
                private $exec; 

            // le constructeur
                function __construct($subject, $idcmpt, $cleCmpt){
                    if($cleCmpt == "cleCoffre1"){
//                        echo $subject." ".$idcmpt." ".$cleCmpt;
                        $requete = "UPDATE  compte_utilisateur
                        SET cleCoffre1 = '$subject'
                        where  ID_Compte ='$idcmpt' ";
                        global $BDD; // acces a la variable ds definie dans datasource.php
                        //executer la requete
                        $exec = $BDD->query($requete);
                        //recuperation de l'execution de la requete
        //                return $tabDomaines;   
                    }else{
//                        echo $subject." ".$idcmpt." ".$cleCmpt;
                        $requete = "UPDATE  compte_utilisateur
                        SET cleCoffre2 = '$subject'
                        where  ID_Compte ='$idcmpt' ";
                        global $BDD; // acces a la variable ds definie dans datasource.php
                        //executer la requete
                        $exec = $BDD->query($requete);
                        //recuperation de l'execution de la requete
        //                return $tabDomaines;
                    }
                } 

    }
    class Coffres{
            // Propriétés
                private  $tabCoffres;
                private $exec; 

            // le constructeur
                function __construct(){
                    $requete = 'SELECT * FROM coffres';
                    global $BDD; // acces a la variable ds definie dans datasource.php
                    //executer la requete
                    $exec = $BDD->query($requete);
                    //recuperation de l'execution de la requete
                    $this->tabCoffres = $exec->fetchAll();
    //                return $tabDomaines;

                }

              // les commitateur
               function get_Cof(){
                    return($this->tabCoffres);
                }
    }
    class Coffresinfo{
        // Propriétés
            private  $tabCoffres;
            private $exec; 

        // le constructeur
            function __construct($id){
                global $BDD; // acces a la variable ds definie dans datasource.php
                $requet = "SELECT * FROM coffres WHERE ID_Coffres = ?";
                $query = $BDD->prepare($requet);
                // Exécuter la requête 
                $query->execute(array($id));
                $this->tabCoffres = $query->fetch();
            }

          // les commitateur
           function get_Cof(){
                return($this->tabCoffres);
            }
}
    class ControlleLogine{
        // Propriétés
            private  $tabControlle;
            private $exec; 
          
        // le constructeur
            function __construct(){
                $requete = 'SELECT * FROM controllogine';
                global $BDD; // acces a la variable ds definie dans datasource.php
                //executer la requete
                $exec = $BDD->query($requete);
                //recuperation de l'execution de la requete
                $this->tabControlle = $exec->fetchAll();
//                return $tabDomaines;

            }
          
          // les commitateur
           function get_Controller(){
                return($this->tabControlle);
            }
        }


?>