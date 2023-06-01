
<html>
<body>
    <form method ="post" action = "welcome.php">
        Nom :  <input type="text" name="nom"> <br> <br>
     E-mail :  <input type="text" name="Email"> <br> <br>
               <input type="submit" > 
    </form>
    mot clé : <?php  
          // collecter valeur du champs de saisie
          $name = $_GET['motcler'];
          if (empty($name) == true) {
            echo "Name is empty..";
          } else {
             echo $name;
          }
        
    ?><br> <br>
    telephone : <?php  
          // collecter valeur du champs de saisie
          $name = $_GET['telephone'];
          if (empty($name) == true) {
            echo "Name is empty..";
          } else {
             echo $name;
          }
    ?>


</body>
</html>
