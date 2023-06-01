
<html>
<body>
   <?php  
      class fruit{
          // Propriétés
          public $nom;
          public $couleur;
        function set_nom($Valeurnom){
            if($Valeurnom !==null){
                $this->nom = $Valeurnom;
            }
        }
        function get_nom(){
            return($this->nom);
        }
        function set_couleur($Valeurcouleur){
            if($Valeurcouleur !==null){
                $this->couleur = $Valeurcouleur;
            }
        }
        function get_couleur(){
            return($this->couleur);
        }
      }
    
    // creation des instances d'objet
    $pomme = new fruit();
    $banane = new fruit();
    
    $pomme->set_nom('pomme ');
    $pomme->set_couleur('rouge');
    
    $banane->set_nom('Banane ');
    $banane->set_couleur(' Jaune');
    
    echo $pomme->get_nom();
    echo $pomme->get_couleur();
    echo "<br>";
    echo $banane->get_nom();
    echo $banane->get_couleur();
    echo "<br>";
    /*
        Vous pouvez utiliser le mot-clé ( instanceof ) pour vérifier si un objet appartient à une classe spécifique:
    */
    var_dump($pomme instanceof fruit);
    ?>

    
</body>
</html>