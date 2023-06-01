
<html>
<body>
   <?php  
      class fruit{
        // Propriétés
          public $nom;
          public $couleur;
          
        // le constructeur
            function __construct($Valeurnom,$couleur){
                    $this->nom = $Valeurnom;
                    $this->couleur = $couleur;

            }
          
        // le Destructeur
            function __destruct(){
                echo "le fruit est {$this->nom} {$this->couleur} <br>";
            }
          
          // les commitateur
            function get_nom(){
                return($this->nom);
            } 
            function get_couleur(){
                return($this->couleur);
            }
      }
    
    // creation des instances d'objet
        $pomme = new fruit("pomme","rose");
    /*
        Vous pouvez utiliser le mot-clé ( instanceof ) pour vérifier si un objet appartient à une classe spécifique:
    */
    var_dump($pomme instanceof fruit);
    ?>

    
</body>
</html>