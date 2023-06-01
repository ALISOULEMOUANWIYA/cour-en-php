<?php
  require_once "EXEMPLE8_Interface__Avancer8.php";
$nom = "chat" ;
$couleur = "bleu" ;
$VariableVariable = new Remplissage;
$VariableVariable->set_SaisirNomAniamle($nom);
$VariableVariable->set_SaisirouleurAniamle($couleur);
$crier = null;
$nom_Et_Couleur = null;
$CategoriAnim = null;

       // $InstanceVariable = new LesVariableInstance;
       // $InstanceVariable->LesVariableInstanceVa();

    // creation listes des animaux
    if($VariableVariable->get_SaisirNomAniamle() !== "" && $VariableVariable->get_SaisirouleurAniamle() !== ""){
        $nom = $VariableVariable->get_SaisirNomAniamle();
        if($VariableVariable->get_SaisirNomAniamle() == "chat"){
                echo $VariableVariable->get_SaisirNomAniamle()." ".$VariableVariable->get_SaisirouleurAniamle();
                 $InstanceVariable = new LesVariableInstance;
                $crier = new crie("meow");
                $nom_Et_Couleur = new NamEtColor($VariableVariable->get_SaisirNomAniamle(), $VariableVariable->get_SaisirouleurAniamle());
                $CategoriAnim = new Categorie;
            }else{
                if($VariableVariable->get_SaisirNomAniamle() == "Chien"){
                    $InstanceVariable = new LesVariableInstance;
                    $crier = new crie("brak");
                    $nom_Et_Couleur = new NamEtColor($VariableVariable->get_SaisirNomAniamle(), $VariableVariable->get_SaisirouleurAniamle());
                    $CategoriAnim = new Categorie;   
                }else{
                    if($VariableVariable->get_SaisirNomAniamle() =="Moustique"){
                         $InstanceVariable = new LesVariableInstance;
                        $crier = new crie("zann");
                        $nom_Et_Couleur = new NamEtColor($VariableVariable->get_SaisirNomAniamle(), $VariableVariable->get_SaisirouleurAniamle());
                        $CategoriAnim = new Categorie;   
                    }  
                }
           }
    }
    if($crier !== null && $nom_Et_Couleur !== null && $CategoriAnim !== null){
        $animalsCrie = array($crier);
        $animalsNomEtCouleur = array($nom_Et_Couleur);
        $animalsCategori = array($CategoriAnim);

        // Dites aux animaux de faire un son
        foreach($animalsCrie as $animales) {
            if(strcmp($crier->get_crie(), "meow") == 0){
                $animales->CrieAnimale();
                foreach($animalsNomEtCouleur as $animalesNom) {
                    if(strcasecmp($crier->get_crie(), "meow") == 0){
                        echo $animalesNom->NomEtCouleur($nom,$couleur);
                    }
                }
                foreach($animalsCategori as $animalesCat) {
                    if(strcasecmp($crier->get_crie(), "meow") == 0){
                        echo $animalesCat->CategorieAnimale("Vertebre");
                    }
                }
            }elseif(strcasecmp($crier->get_crie(), "brak")==0){
                $animales->CrieAnimale();
                foreach($animalsNomEtCouleur as $animalesNom) {
                    if(strcasecmp($crier->get_crie(), "brak") == 0){
                        echo $animalesNom->NomEtCouleur($nom,$couleur);;
                    }
                }
                foreach($animalsCategori as $animalesCat) {
                    if(strcasecmp($crier->get_crie(), "brak") == 0){
                        echo $animalesCat->CategorieAnimale("Vertebre");
                    }
                }
            }else{
                if(strcasecmp($crier->get_crie(), "zann")==0){
                $animales->CrieAnimale();
                foreach($animalsNomEtCouleur as $animalesNom) {
                    if(strcmp($crier->get_crie(), "zann") == 0){
                        echo $animalesNom->NomEtCouleur($nom,$couleur);
                    }
                }
                foreach($animalsCategori as $animalesCat) {
                    if(strcasecmp($crier->get_crie(), "zann") == 0){
                        echo $animalesCat->CategorieAnimale("insecte");
                    }
                }
                }
            }
        }   
    }

?>