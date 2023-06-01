
<html>
<body>
   bien venu : <?php  
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // collecter valeur du champs de saisie
          $name = $_POST['nom'];
          if (empty($name) == true) {
            echo "Name is empty..";
          } else {
             echo $name;
          }
        }
    ?><br>
    votre email : <?php  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // collecter valeur du champs de saisie
          $name = $_POST['Email'];
          if (empty($name) == true) {
            echo "Name is empty..";
          } else {
             echo $name;
          }
        }
    ?>
    <form method ="get" action = "Exercice14.php">
        mot clé :  <input type="text" name="motcler"> <br> <br>
      telephone :  <input type="number" name="telephone"> <br> <br>
               <input type="submit" > 
    </form>
</body>
</html>