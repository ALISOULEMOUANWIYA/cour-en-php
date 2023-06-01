<?php 
    trait message1{
        public function msg1(){
          echo "bonjour ";   
        }
    }
    trait message2{
        public function msg2(){
            echo "OPP reduces code duplication! ";
        }
    }
    
    class welcome{
        use message1;
    }
    class welcome2{
        use message1, message2;
    }

    $objet = new welcome();
    $objet->msg1();
echo "<br>";

    $objet2 = new welcome2();
    $objet2->msg1();
    $objet2->msg2();
echo "<br>";

    
?>