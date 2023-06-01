
<html>
<body>
    <form method ="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      nom : <input type="text" name="nom"> 
        <br><br>
      E-mail : <input type="text" name="email"> <br><br>
      Website : <input type="text" name="website"> <br><br>
      Comment : <textarea name="comment" row="5" cols="40"></textarea> <br><br>
      Femme : <input type="radio" name="genre" value="Femme"> 
      Mal: <input type="radio" name="genre" value="Homme"> 
      Autre: <input type="radio" name="genre" value="Autre"> <br><br>
               <input type="submit" > 
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
           $nom = test_input($_POST["nom"]);   
           $email = test_input($_POST["email"]);   
           $website = test_input($_POST["website"]);   
           $comment = test_input($_POST["comment"]);   
           $genre = test_input($_POST["genre"]);  
                if (empty($nom) == false && empty($email) == false && empty($website) == false && empty($comment) == false && empty($genre) == false ){
                    echo "<h2>Your Input:</h2>";
                    echo $nom;
                    echo "<br>";
                    echo $email;
                    echo "<br>";
                    echo $website;
                    echo "<br>";
                    echo $comment;
                    echo "<br>";
                    echo $genre;   
                }
        }
    
       function test_input($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return ($data);
       }
    ?>
    <?php

    ?>
</body>
</html>