<?php

    // Interface Classe
    interface animale {
      public function CrieAnimale();
      public function CategorieAnimale($categorie) : string;

      public function NomEtCouleur($nom, $couleur);
    }
    abstract class ClasseInstance {
      abstract public function LesVariableInstanceVa($nomInstance, $couleurInstance, $CrieInstance);
    }


    // classe Enfant
    class Crie implements animale{
        private $crie; 
        
        // Constructeur
        public function __construct($criAnim){
            $this->crie = $criAnim;
        }
        
        // Methde
        public function CrieAnimale(){
            echo " $this->crie ";
        }
        public function CategorieAnimale($categorie) : string{
            return"";
        }
         public function NomEtCouleur($nom, $couleur){}
        
        // Commitateur
        public function get_crie(){
            return $this->crie;
        }
        // Acesseur
        public function set_crie($valeurCrie){
            $this->crie = $valeurCrie;
        }
    }

    class NamEtColor implements animale{
        private $nom; 
        private $couleur; 
        
        // Constructeur
        public function __construct($valeurNom, $valeurCouleur){
            $this->nom = $valeurNom;
            $this->couleur = $valeurCouleur;
        }
        
        // Methde
        public function CrieAnimale(){}
        public function CategorieAnimale($categorie) : string{
            return"";
        }
        public function NomEtCouleur($nom, $couleur){
            if($nom === "Chat"){
                $prefix = " ($nom) $couleur ";
            }elseif($nom === "Chien"){
                $prefix = " ($nom) $couleur ";
            }else{
                if($nom === "Moustique"){
                    $prefix = " ($nom) $couleur ";
                }else{
                  $prefix = "";   
                }
            }
            return($prefix);
        }
        
        // Commitateur
//        public function get_nomAnimal(){
//            return($this->nom);
//        }
    }

    class Categorie implements animale{
        // Methde
          public function CrieAnimale(){}
          public function NomEtCouleur($nom, $couleur){}
        public function CategorieAnimale($categorie) : string{
            if($categorie === "Vertebre"){
                $prefix = " $categorie ";
            }elseif($categorie === "insecte"){
                $prefix = " $categorie ";
            }else{
                $prefix = "";
            }
            return(" Dont un(e) ".$prefix);
        }
    }
    
    class LesVariableInstance extends ClasseInstance{
        
        private $NomInstanceAnimale;
        private $couleurInstanceAnimale;
        private $crieInstanceAnimale;
        
        public function LesVariableInstanceVa($nomInstance, $couleurInstance, $CrieInstance){
            $this->NomInstanceAnimale = $nomInstance;
            $this->couleurInstanceAnimale = $couleurInstance;
            $this->crieInstanceAnimale = $CrieInstance;
        }
        
        public function get_NomInstanceAnimale(){
            return($this->NomInstanceAnimale);
        }
        public function get_crieInstanceAnimale(){
            return($this->couleurInstanceAnimale);
        }
        public function get_couleurInstanceAnimale(){
            return($this->couleurInstanceAnimale);
        }
    }

    class Remplissage{
        private $SaisirNomAniamle = "Moustique" ;
        private $SaisirouleurAniamle = "bleu" ;

        public function get_SaisirNomAniamle(){
           return($this->SaisirNomAniamle);
        }
        public function get_SaisirouleurAniamle(){
            return($this->SaisirouleurAniamle);
        }
        public function set_SaisirNomAniamle($nom){
           $this->SaisirNomAniamle = $nom;
        }
        public function set_SaisirouleurAniamle($couleur){
            $this->SaisirouleurAniamle = $couleur;
        }
    }

?>
