<?php
$nomComp = $prenomComp = $emailComp = $naissanceComp = $genreComp = $telephoneComp = $addressComp = $roleCompteComp = $motDePasseComp = "";
$mat1 = $mat2 = "";
$code1 = $code2 = $code3 = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nomComp = test_input($_POST["nomUtilisateur"]);  
    $prenomComp = test_input($_POST["prenomUtilisateu"]);  
    $emailComp = test_input($_POST["EmailUtilisateur"]);  
    $naissanceComp = test_input($_POST["DateNaissance"]);  
    $genreComp = test_input($_POST["GenreColection"]);  
    $telephoneComp = test_input($_POST["telephoneUtilisateur"]);  
    $addressComp = test_input($_POST["addressUtilisateur"]);  
    $roleCompteComp = test_input($_POST["RoleColection"]);  
    $motDePasseComp = test_input($_POST["motPasseUtilisateur"]);
    if (empty($_POST["$nomComp"]) && empty($_POST["$prenomComp"]) && empty($_POST["$emailComp"]) && empty($_POST["$naissanceComp"]) && empty($_POST["$genreComp"]) && empty($_POST["$telephoneComp"]) && empty($_POST["$addressComp"]) && empty($_POST["$roleCompteComp"])  && empty($_POST["$motDePasseComp"])){
        $motDePasseComp = md5($motDePasseComp);
        
        $ajouter = new Ajoutecomptegerant($nomComp, $prenomComp, $emailComp, $naissanceComp, $genreComp, $telephoneComp, $addressComp, $roleCompteComp, $motDePasseComp);
        
        if($ajouter->getNom() !="" && $ajouter->getPrenom() !="" && $ajouter->getEmail() !="" && $ajouter->getNaissance() !="" && $ajouter->getGenre() !="" && $ajouter->getTelephone() !="" && $ajouter->getaddresse() !="" && $ajouter->getRole() !="" && $ajouter->getPassword() !=""){
            
                    $code1 = codeIndatifiant($ajouter->getNom());
                    $code2 = codeIndatifiant($ajouter->getPrenom());
                    $code3 = codeIndatifiant($ajouter->getRole());
                    $ajouter->setCodeIdet($code3."".$mat2."".$code1);
                    //-------------------------
                    $format = "%d/%m/%Y %H:%M:%S";
                    $ajouter->setDateInscrit(strftime($format));
                    //-------------------------
                    $mat1 = MatIndatifiant($ajouter->getRole());
                    $mat2 = MatIndatifiant($ajouter->getDateInscrit());
                    $ajouter->setMatricule($mat2."|".$mat1."|".$code1);
                    //------------------------
                     $ajouter->setAge(getAgeUti($ajouter->getNaissance() ,substr(date("Y-m-d",time()),0,4)));
            
            global $BDD;
                    $requete = $BDD->prepare("INSERT INTO compte_gerant(Prenom_Gerant, Nom_Gerant, Address_Email_Gerant, DATE_naissance_Gerant, Genre_Gerant, Numero_Telephone_Gerant, Address_De_Localisation_Gerant, ID_Fonction_Gerant, PassWord_Gerant, CodeIdentiction_Gerant, Date_inscription_Gerant, Matricule_Gerant, Age_Gerant)
                    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $requete->execute(array( $ajouter->getPrenom(), $ajouter->getNom(), $ajouter->getEmail(), $ajouter->getNaissance(),  $ajouter->getGenre(), $ajouter->getTelephone(), $ajouter->getaddresse() ,$ajouter->getRole(), $ajouter->getPassword(), $ajouter->getCodeIdet(), $ajouter->getDateInscrit(), $ajouter->getMatricule(), $ajouter->getAge()));
//            $BDD->close();

            }
    }
}
function MatIndatifiant($matIddata){
   $matIddata = substr($matIddata,0,8);
   $codeIddata = strrev($matIddata);
//   $matIddata = str_shuffle($matIddata);
   return ($matIddata);
}
function getAgeUti($agedata, $dateCourant){
  $agedata = substr($agedata, 0 ,4);
  $agedata = (int)$agedata;
  $dateCourant = (int)$dateCourant;
  $agedata = ($dateCourant - $agedata);
  return($agedata);
}
function codeIndatifiant($codeIddata){
  $codeIddata = substr($codeIddata, 3);
  $codeIddata = strrev($codeIddata);
  $codeIddata = str_shuffle($codeIddata);
  return ($codeIddata);
}
function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return ($data);
}

?>