<html>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Name: <input type="text" name="saisie">
            <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // collectER valeur du champs de saisie
          $name = $_POST['saisie'];
          if (empty($name) == true) {
            echo "Name is empty..";
          } else {
            echo $name;
          }
        }
    ?>

</body>
</html>