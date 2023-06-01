<?php  
      class fruit{
        // Propriétés
          private $nom;
          private $couleur;
          
        // le constructeur
            function __construct($Valeurnom,$couleur){
                    $this->nom = $Valeurnom;
                    $this->couleur = $couleur;

            }
          
        // les methodes
          public function intro(){
              echo "le fruit est {$this->nom} {$this->couleur} <br>";
          }
          
        /*
         protected function intro(){
             //Héritage et modificateur d'accès protégé
              echo "le fruit est {$this->nom} {$this->couleur} <br>";
          }
          */
          
        // les commitateur
           public function get_nom(){
                return($this->nom);
            } 
           public function get_couleur(){
                return($this->couleur);
            }
      }

?>
