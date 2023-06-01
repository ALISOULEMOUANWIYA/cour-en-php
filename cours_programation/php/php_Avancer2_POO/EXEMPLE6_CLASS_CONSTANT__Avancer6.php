
<html>
<body>
   <?php  
      class Goodbye{ 
         const messagerFormation = "mercie de regarder cette video ok je te laisse là ";
          public function jetelAisse(){
              echo self::messagerFormation;
          }
      }
        //echo Goodbye::messagerFormation;
        $goodby = new Goodbye();
        $goodby -> jetelAisse();
    ?>

    
</body>
</html>