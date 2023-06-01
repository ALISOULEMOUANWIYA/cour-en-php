<?php 
    class saluer{
      public static function salutation(){
//       substr( date("h:i:sa"), 0, 2) < 12 )
          if(substr( date("H"), 0) < 12 ){
              echo "Bonjour !";
          }else{
             if(substr( date("H"), 0) > 12 && substr( date("H"), 0) < 15){
               echo "Bon apres  !";
             }else{
                 echo "Bonne soir  !";
             }
          }
      }   
    }
saluer::salutation();
?>