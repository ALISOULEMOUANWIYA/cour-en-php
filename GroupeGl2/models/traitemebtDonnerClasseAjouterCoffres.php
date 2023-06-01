<?php
$datedebutCoffres = $datefinCoffres  = $cotisationCoffres = $nombreadherantCoffres = $montant = $contacteCoffres = $Durer = "";
$datedebutCoffresModif = $datefinCoffresModif  = $cotisationCoffresModif = $nombreadherantCoffresModif = $montantModif = $contacteCoffresModif = $DurerModif = "";
$NbrJours = $NbrMois = $Anner = $idCoffres = 0;
$messageErreur ="";

if(isset($_POST['Modifier'])){
            $idCoffres= $_POST["idCoff"];
            $datedebutCoffres = $_POST["DateDebutCoffres"];  
            $datefinCoffres = $_POST["DateFinCoffres"]; 
            $cotisationCoffres = $_POST["CotisationCoffres"];  
            $nombreadherantCoffres = $_POST["nbrAdherant"];  
            $montant = $_POST["MontantCoffres"];  
            $contacteCoffres = $_POST["ContacteCoffres"];
    
        if(CaleculerAnne($datedebutCoffres, $datefinCoffres) >= 0 && CaleculerDurerMois($datedebutCoffres, $datefinCoffres) >= 0 && CaleculerDurerJours($datedebutCoffres, $datefinCoffres) >= 0){
    
            if (empty($_POST["$datedebutCoffres"]) && empty($_POST["$datefinCoffres"]) && empty($_POST["$cotisationCoffres"]) && empty($_POST["$nombreadherantCoffres"]) && empty($_POST["$montant"]) && empty($_POST["$contacteCoffres"])){
   

                $ajouterCOf = new AjouteCoffre($datedebutCoffres, $datefinCoffres, $cotisationCoffres, $nombreadherantCoffres, $montant, $contacteCoffres);

                if($ajouterCOf->getDateDebut() !="" && $ajouterCOf->getDateFin() !="" && $ajouterCOf->getCotisation() !="" && $ajouterCOf->getNombreadherant() !="" && $ajouterCOf->getMontant() !="" && $ajouterCOf->getContacte()){
    
                 $NbrMois = CaleculerDurerMois($ajouterCOf->getDateDebut(), $ajouterCOf->getDateFin());
                $NbrJours = CaleculerDurerJours($ajouterCOf->getDateDebut(), $ajouterCOf->getDateFin());
                $Anner = CaleculerAnne($ajouterCOf->getDateDebut(), $ajouterCOf->getDateFin());
                $ajouterCOf->SetDure($NbrMois." Mois ".$NbrJours." Jours ".$Anner." ans.");

                    global $BDD;
                                $datedebutCoffres = $ajouterCOf->getDateDebut();  
                                $datefinCoffres = $ajouterCOf->getDateFin();
                                $Durer = $ajouterCOf->getDure();
                                $cotisationCoffres = $ajouterCOf->getCotisation();  
                                $nombreadherantCoffres = $ajouterCOf->getNombreadherant();  
                                $montant = $ajouterCOf->getMontant();  
                                $contacteCoffres = $ajouterCOf->getContacte();
                    
                                $requete = "UPDATE  coffres
                                SET Date_Debut_Coffres = '$datedebutCoffres',
                                    Date_fin_Coffres = '$datefinCoffres',
                                    Duree_Coffres = '$Durer',
                                    Cotisation_Coffres = '$cotisationCoffres',
                                    Adherant_Coffres = '$nombreadherantCoffres',
                                    Montant_Coffres = '$montant',
                                    Contancte_Coffres = '$contacteCoffres'
                                where  ID_Coffres ='$idCoffres' ";
                    $exec = $BDD->query($requete);
                    header("Location: ../index.php");
                }
            }   
        }else{
            $messageErreur =  "La date du debut Doit être inferieur à celle de la fin !";
        }
}else{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
            $datedebutCoffres = $_POST["DateDebutCoffres"];  
            $datefinCoffres = $_POST["DateFinCoffres"]; 
            $cotisationCoffres = $_POST["CotisationCoffres"];  
            $nombreadherantCoffres = $_POST["nbrAdherant"];  
            $montant = $_POST["MontantCoffres"];  
            $contacteCoffres = $_POST["ContacteCoffres"];
        if(CaleculerAjoutAnne($datedebutCoffres, $datefinCoffres) >= 0 && CaleculerMoisAjout($datedebutCoffres, $datefinCoffres) >= 0 && CaleculerJoursAjout($datedebutCoffres, $datefinCoffres) >= 0){
            
            if (empty($_POST["$datedebutCoffres"]) && empty($_POST["$datefinCoffres"]) && empty($_POST["$cotisationCoffres"]) && empty($_POST["$nombreadherantCoffres"]) && empty($_POST["$montant"]) && empty($_POST["$contacteCoffres"])){


                $ajouterCOf = new AjouteCoffre($datedebutCoffres, $datefinCoffres, $cotisationCoffres, $nombreadherantCoffres, $montant, $contacteCoffres);

                if($ajouterCOf->getDateDebut() !="" && $ajouterCOf->getDateFin() !="" && $ajouterCOf->getCotisation() !="" && $ajouterCOf->getNombreadherant() !="" && $ajouterCOf->getMontant() !="" && $ajouterCOf->getContacte()){
    
                 $NbrMois = CaleculerMoisAjout($ajouterCOf->getDateDebut(), $ajouterCOf->getDateFin());
                $NbrJours = CaleculerJoursAjout($ajouterCOf->getDateDebut(), $ajouterCOf->getDateFin());
                $Anner = CaleculerAjoutAnne($ajouterCOf->getDateDebut(), $ajouterCOf->getDateFin());
                $ajouterCOf->SetDure($NbrMois." Mois ".$NbrJours." Jours ".$Anner." ans.");

                    global $BDD;
                            $requete = $BDD->prepare("INSERT INTO coffres(Date_Debut_Coffres, Date_fin_Coffres, Duree_Coffres, Cotisation_Coffres, Adherant_Coffres, Montant_Coffres, Contancte_Coffres)
                            VALUES(?, ?, ?, ?, ?, ?, ?)");
                            $requete->execute(array($ajouterCOf->getDateDebut(), $ajouterCOf->getDateFin(), $ajouterCOf->getDure(), $ajouterCOf->getCotisation(), $ajouterCOf->getNombreadherant(), $ajouterCOf->getMontant(), $ajouterCOf->getContacte()));
                    $messageErreur =  " Coffre ajouter !";

                }
            }   
        }else{
            $messageErreur =  "La date du debut Doit être inferieur à celle de la fin !";
        }
    }
}
function CaleculerDurerJours($Debutdata, $Findata){
   $Debutdata = (int)substr($Debutdata,8,2);
   $Findata = (int)substr($Findata,8,2);
   $Findata = ($Findata-$Debutdata);
    if($Findata < 0){
        return(-1*($Findata));
    }else{
      return ($Findata);   
    }
}
function CaleculerDurerMois($Debutdata, $Findata){
   $Debutdata = (int)substr($Debutdata,5,2);
   $Findata = (int)substr($Findata,5,2);
   $Findata = ($Findata-$Debutdata);
    if($Findata < 0){
        return(-1*($Findata));
    }else{
      return ($Findata);   
    }
}
function CaleculerAnne($Debutdata, $Findata){
    if($Debutdata>$Findata){
        return(-1);
    }else{
       $Debutdata = (int)substr($Debutdata,0,4);
       $Findata = (int)substr($Findata,0,4);
       $Findata = ($Findata-$Debutdata);
      return ($Findata);   
    }
}
//------------------------------------------------------------
function CaleculerJoursAjout($Debutdata, $Findata){
   $Debutdata = (int)substr($Debutdata,8,2);
   $Findata = (int)substr($Findata,8,2);
   $Findata = ($Findata-$Debutdata);
    if($Findata < 0){
        return(-1*($Findata));
    }else{
      return ($Findata);   
    }
}
function CaleculerMoisAjout($Debutdata, $Findata){
    $Debutdata = (int)substr($Debutdata,5,2);
    $Findata = (int)substr($Findata,5,2);
    $Findata = ($Findata-$Debutdata);
    if($Findata < 0){
       return(-1*($Findata));
    }else{
      return ($Findata);   
    }
}
function CaleculerAjoutAnne($Debutdata, $Findata){
    if($Findata>$Findata){
        return(-1);
    }else{
       $Debutdata = (int)substr($Debutdata,0,4);
       $Findata = (int)substr($Findata,0,4);
       $Findata = ($Findata-$Debutdata);
      return ($Findata); 
      return ($Findata);   
    }
}
?>