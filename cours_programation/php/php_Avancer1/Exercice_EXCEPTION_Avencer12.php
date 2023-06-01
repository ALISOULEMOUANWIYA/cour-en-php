
<html>
<body>
   <?php  
        function division($dividend, $diviseur){
            if($diviseur == 0){
                throw new Exception("Division by zero");
            }
            return($dividend/$diviseur);
        }
    try{
      echo division(5, 3);
    }catch(Exception $ex){
        $code = $ex -> getCode();
        $message = $ex -> getMessage();
        $file = $ex -> getFile();
        $line = $ex -> getLine();
        echo "Exception lancée $file en ligne $line: [Code $code]
  $message";
    }finally{
        echo " Processus terminé";
    }

    ?>

    
</body>
</html>