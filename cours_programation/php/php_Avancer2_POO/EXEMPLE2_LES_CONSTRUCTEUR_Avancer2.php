
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

        echo $pomme->get_nom()." ";
        echo $pomme->get_couleur()."<br>";
    /*
        Vous pouvez utiliser le mot-clé ( instanceof ) pour vérifier si un objet appartient à une classe spécifique:
    */
    var_dump($pomme instanceof fruit);
    ?>

    
</body>
</html>