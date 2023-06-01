
<html>
<body>
   <?php  
      require "EXEMPLE5_Heritage__Avancer5.php";
      class classeHeritant extends fruit{          
        // les methodes
          public function massage(){
              echo "Suis-je un fruit ou une baie ?<br>";
              $this->intro();
          }

      }
    
    // creation des instances d'objet
        $boeur = new classeHeritant("boeur","rose");
        $boeur->massage();
    
    /*
        Vous pouvez utiliser le mot-clé ( instanceof ) pour vérifier si un objet appartient à une classe spécifique:
    */
    var_dump($boeur instanceof fruit);
    ?>

    
</body>
</html>