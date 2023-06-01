
<html>
<body>
   <?php  
      require "EXEMPLE5_Heritage__Avancer5.php";
    //Remplacer les méthodes héritées
      class classeHeritant extends fruit{ 
          private $taille;
        // le constructeur
            function __construct($Valeurnom,$valeurCouleur,$valeurtaille){
                    $this->nom = $Valeurnom;
                    $this->couleur = $valeurCouleur;
                    $this->taille = $valeurtaille;
            }
          
        // les methodes
          public function intro(){
              echo "le fruit est {$this->nom}de couleur {$this->couleur} en suit sa taille est {$this->taille}<br>";
          }
      }
    
    // creation des instances d'objet
        $boeur = new classeHeritant("boeur","rose","50");
        $boeur->intro();
    ?>

    
</body>
</html>