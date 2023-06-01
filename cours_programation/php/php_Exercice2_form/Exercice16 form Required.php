
<html>
<body>
    <?php
           $nom = $email = $website = $comment = $genre = "";  
           $nomErr = $emailErr = $websiteErr = $commentErr = $genreErr = "";  
        if($_SERVER["REQUEST_METHOD"] == "POST"){ 
            if (empty($_POST["nom"])){
                $nomErr = "Champ nom non saisie";
            }else{
                 $nom = test_input($_POST["nom"]);
            }
            
            if (empty($_POST["email"])){
                $emailErr = "Champ E-mail non saisie";
            }else{
                $email = test_input($_POST["email"]);  
            }
            
            if (empty($_POST["website"])){
                $websiteErr = "Champ WebSite non saisie";
            }else{
                $website = test_input($_POST["website"]);  
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
    ?>
</body>
</html>