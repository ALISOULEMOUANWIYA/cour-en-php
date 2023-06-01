<?php 
    class saluer{
      protected static function salutation(){
//       substr( date("h:i:sa"), 0, 2) < 12 )
          if(substr( date("H"), 0) < 12 ){
               $salue ="Bonjour ,";
          }else{
             if(substr( date("H"), 0) > 12 && substr( date("H"), 0) < 15){
               $salue = "Bon apres  ,";
             }else{
                 $salue = "Bonne soir  ,";
             }
          }
          return($salue);
      }
    }
    class rappel_Heur extends saluer{
        private $rappel;
        public function __construct(){
            $this->rappel = parent::salutation()." il est ".date("h:i:sa");
        }
        public function getRappel(){
            return($this->rappel);
        }
    }
    $rappel = new rappel_Heur();
    echo $rappel->getRappel();
?>