
<html>
<body>
   <?php  
    // classe Parent
      abstract class voiture{ 
          public $nom;
          public function __construct($nomValeur){
              $this->nom = $nomValeur;
          }
          abstract public function intro() : string;
      }
    
    // Classes Enfants
    class Audi extends voiture{
        public function intro() : string{
            return("Choisissez la qualité allemande ! : je suis un $this->nom ");
        }
    }
    class VolVo extends voiture{
        public function intro() : string{
            return("Fier d'être suédois! Je suis un $this->nom ");
        }
    }
    class Citroen extends voiture{
        public function intro() : string{
            return("L'extravagance française! Je suis un $this->nom ");
        }
    }
    
    // Créer des objets à partir des classes enfants
    $audi = new Audi("Audi");
    echo $audi->intro();
    
    echo "<br>";
    
    $volvo = new VolVo("VolVo");
    echo $volvo->intro();
    
    echo "<br>";
    
    $citroen = new Citroen("Citroen");
    echo $citroen->intro();

    ?>

    
</body>
</html>