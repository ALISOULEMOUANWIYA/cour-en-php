<?php
session_start();
    
    $NomUtil = $PasseWordUtil = "";
     $champVide = "";
     global $BDD;

    (int)$_SESSION['IdCompt'] = 0;
    $_SESSION['PrenomCompt'] = $champVide;
    $_SESSION['NomCompt'] = $champVide;
    $_SESSION['AddressCompt'] = $champVide;
    $_SESSION['PassWord'] = $champVide;
    $_SESSION['ClesCmpt1'] = $champVide;
    $_SESSION['ClesCmpt2'] = $champVide;   
                
    (int)$_SESSION['IdGerant'] = 0;
    $_SESSION['PrenomGerant'] = $champVide;
    $_SESSION['NomGerant'] = $champVide;
    $_SESSION['AddressGerant'] = $champVide;
    $_SESSION['DateGerant'] = $champVide;
    $_SESSION['GenreGerant'] = $champVide;
    $_SESSION['numeroGerant'] = $champVide;
    $_SESSION['AddreLocalGerant'] = $champVide;   
    $_SESSION['IDFonctionGerant'] = $champVide;   
    $_SESSION['PassWordGerant'] = $champVide;   
    $_SESSION['CodeIdentifGerant'] = $champVide;   
    $_SESSION['DateInscriGerant'] = $champVide;   
    $_SESSION['MatriculeGerant'] = $champVide;   
    $_SESSION['AgeGerant'] = $champVide;

    $_SESSION['Incorecte'] = $champVide;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
        $NomUtil = test_text($_POST["NomCompte"]);  
        $PasseWordUtil = test_text($_POST["MotPasse"]); 
    
        if ( empty($_POST["$NomUtil"]) && empty($_POST["$PasseWordUtil"])){
            
            $PasseWordUtil = md5($PasseWordUtil);
            require_once 'Role_Compte.php';
            $Compt = new CompteUtilisateur($NomUtil, $PasseWordUtil);
            if(sizeof($Compt->get_Compte()) > 0){
                foreach($Compt->get_Compte() as $cpt){
                    (int)$_SESSION['IdCompt'] = $cpt["ID_Compte"];
                    $_SESSION['PrenomCompt'] = $cpt["Prenom_Compte"];
                    $_SESSION['NomCompt'] = $cpt["Nom_Compte"];
                    $_SESSION['AddressCompt'] = $cpt["Address_Email_Compte"];
                    $_SESSION['PassWord'] = $cpt["PassWord_Compte"];
                    $_SESSION['ClesCmpt1'] = $cpt["cleCoffre1"];
                    $_SESSION['ClesCmpt2'] = $cpt["cleCoffre2"];   
                }
              $BDD=null;
              header("Location: ../pages/Coffres.php");   
            }else{
                $Comptg = new CompteGerant($NomUtil, $PasseWordUtil);
                if(sizeof($Comptg->get_Compte()) > 0){
                    foreach($Comptg->get_Compte() as $cpt){
                        (int)$_SESSION['IdGerant'] = $cpt["ID_Gerant"];
                        $_SESSION['PrenomGerant'] = $cpt["Prenom_Gerant"];
                        $_SESSION['NomGerant'] = $cpt["Nom_Gerant"];
                        $_SESSION['AddressGerant'] = $cpt["Address_Email_Gerant"];
                        $_SESSION['DateGerant'] = $cpt["DATE_naissance_Gerant"];
                        $_SESSION['GenreGerant'] = $cpt["Genre_Gerant"];
                        $_SESSION['numeroGerant'] = $cpt["Numero_Telephone_Gerant"];
                        $_SESSION['AddreLocalGerant'] = $cpt["Address_De_Localisation_Gerant"];   
                        $_SESSION['IDFonctionGerant'] = $cpt["ID_Fonction_Gerant"];   
                        $_SESSION['PassWordGerant'] = $cpt["PassWord_Gerant"];   
                        $_SESSION['CodeIdentifGerant'] = $cpt["CodeIdentiction_Gerant"];   
                        $_SESSION['DateInscriGerant'] = $cpt["Date_inscription_Gerant"];   
                        $_SESSION['MatriculeGerant'] = $cpt["Matricule_Gerant"];   
                        $_SESSION['AgeGerant'] = $cpt["Age_Gerant"]; 
                    }
//                  $BDD->close();
                  header("Location: ../pages/Coffres.php");   
                }else{
                  $_SESSION['Incorecte'] = "E-mail ou password ?";
                  header("Location: ../pages/PageInscription.php");
                }
            }
        }
}
function test_text($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return ($data);
}
?>