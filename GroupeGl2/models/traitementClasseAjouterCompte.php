<?php
    $prenomCom = $NonCompte  = $AddressCompte = $PassWordCompt = "";
    $controller = new ControlleLogine();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
        
        $prenomCom = test_input($_POST["PrenomUtilisateur"]);  
        $NonCompte = test_input($_POST["NomUtilisateur"]); 
        $AddressCompte = test_input($_POST["EmailCompte"]);  
        $PassWordCompt = test_input($_POST["motDepasse"]);  
        if (empty($_POST["$prenomCom"]) && empty($_POST["$NonCompte"]) && empty($_POST["$AddressCompte"]) && empty($_POST["$PassWordCompt"])){
            
            $PassWordCompt = md5($PassWordCompt);
            
            $ajouterCompt = new AjouteCompteUtilisateur($prenomCom, $NonCompte, $AddressCompte, $PassWordCompt);
            
                $ajouterCompt->setCle1(0);
                $ajouterCompt->setCle2(0);
            
            if($ajouterCompt->getPrenomt() !="" && $ajouterCompt->getNom() !="" && $ajouterCompt->getAddressEmail() !="" && $ajouterCompt->getPasseWordUtil() !=""){
                
               global $BDD;
                   $requete = $BDD->prepare("INSERT INTO compte_utilisateur(Prenom_Compte, Nom_Compte, Address_Email_Compte, PassWord_Compte,	cleCoffre1, cleCoffre2)
                   VALUES(?, ?, ?, ?, ?, ?)");
                   $requete->execute(array($ajouterCompt->getPrenomt(),$ajouterCompt->getNom(),$ajouterCompt->getAddressEmail(),$ajouterCompt->getPasseWordUtil(),$ajouterCompt->getCle1(),$ajouterCompt->getCle2()));
//               $BDD->close();
            
//                echo  $ajouterCompt->getPrenomt()." ".$ajouterCompt->getNom()." ".$ajouterCompt->getAddressEmail()." ".$ajouterCompt->getPasseWordUtil()." ".$ajouterCompt->getCle1()." ".$ajouterCompt->getCle2();
            }
        }
}
function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return ($data);
}
?>