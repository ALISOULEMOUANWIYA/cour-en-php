
<html>
<body>
    <?php
           $nom = $email = $website = $comment = $genre = "";  
           $nomErr = $emailErr = $websiteErr = $commentErr = $genreErr = "";  
        if($_SERVER["REQUEST_METHOD"] == "POST"){ 
            if (empty($_POST["nom"])){
               $nom = "";   
            }else{
                $nom = test_input($_POST["nom"]);   
                // verifier si le nom ne que contient que des lettre et des espaces
                if(!preg_match("/^[a-zA-Z-' ]*$/",$nom)){
                 $nomErr = "Champ nom non saisie";    
                }
            }
            
            if (empty($_POST["email"])){
              $email = "";  
            }else{
                $email = test_input($_POST["email"]);  
                //vérifier si l'adresse e-mail est bien formée
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Champ E-mail non saisie";
                }  
            }
            
            if (empty($_POST["website"])){
                $website = "";
            }else{
                $website = test_input($_POST["website"]); 
                //vérifier si la syntaxe de l'adresse URL est valide (cette expression régulière autorise également les tirets dans l'URL)
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                    $websiteErr = "Champ WebSite non saisie";   
                } 
            }
            
            if (empty($_POST["comment"])){
                $commentErr = "Champ comment non saisie";
            }else{
                $comment = test_input($_POST["comment"]);  
            }
            
           if (empty($_POST["genre"])){
                $genreErr = "choisissez au moin un genre";
            }else{
                $genre = test_input($_POST["genre"]);  
            }
             
        }
    
       function test_input($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return ($data);
       }
    ?>
    <form method ="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      nom : <input type="text" name="nom"><span class="error"> *<?php echo $nomErr ?></span>
        <br><br>
      E-mail : <input type="text" name="email"><span class="error"> *<?php echo $emailErr ?></span> 
        <br><br>
      Website : <input type="text" name="website"><span class="error"> *<?php echo $websiteErr ?></span>  
        <br><br>
      Comment : <textarea name="comment" row="5" cols="40"></textarea> <br><br>
      Femme : <input type="radio" name="genre" value="Femme"> 
      Mal: <input type="radio" name="genre" value="Homme"> 
      Autre: <input type="radio" name="genre" value="Autre"> 
      <span class="error">*<?php echo $genreErr ?></span>   
      <br><br>
      
               <input type="submit" > 
    </form>
    <?php 
        if (empty($_POST["nom"]) == false && empty($_POST["email"]) == false && empty($_POST["website"]) == false && empty($_POST["comment"]) == false && empty($_POST["genre"]) == false && $nomErr == "" && $emailErr == "" && $websiteErr == "" ){
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
    ?>
</body>
</html>