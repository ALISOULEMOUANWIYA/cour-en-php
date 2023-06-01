<!DOCTYPE html>
<html>
    <body>
        <h3>fichier de telecharment </h3>

        <?php
        define ("NomDossier", "Dossier3/dossier2/dossier1/");
        do {
            $dir = NomDossier;
            while (!is_dir($dir)) {
                $basedir = dirname($dir);
                if ($basedir == '/' || is_dir($basedir)){ 
                    mkdir($dir,0777);
                }else{
                  $dir=$basedir;   
                }
           }
        } while ($dir != NomDossier);
           /*
             #- $emplacement : "uploads /" - spécifie le répertoire où le fichier va être placé
             
             #- $chemin_fichier : spécifie le chemin du fichier à télécharger
             
             #- $telecharementok = 1 : n'est pas encore utilisé (sera utilisé plus tard)
             
             #-$type_fichier : contient l'extension de fichier du fichier (en minuscules)
             
             #-Ensuite, vérifiez si le fichier image est une image réelle ou une fausse image
           */
         if($_SERVER["REQUEST_METHOD"] == "POST"){
            $emplacement = NomDossier;
            $chemin_fichier = $emplacement.basename($_FILES['fichiertelechargement']["name"]);
            $telecharementok = 1;
            $type_fichier = strtolower(pathinfo($chemin_fichier, PATHINFO_EXTENSION));
        
            // Vérifie si le fichier image est une image réelle ou une fausse image
            if(isset($_POST["submit"]))
            {
                $obtenirFichier = getimagesize($_FILES["fichiertelechargement"]["tmp_name"]);
                if($obtenirFichier !== false){
                    echo "le fichier est un image  ".$obtenirFichier["mime"]."<br>";
                    $telecharementok = 1;
                }else{
                    echo "le fichier n'est pas un image .";
                    $telecharementok = 0;
                }
            }
        
            // Vérifie si le fichier existe déjà
            if(file_exists($chemin_fichier))
            {
              echo "Désolé, le ficher existe deja dans le repertoir .";
              $telecharementok = 0;  
            }
        
            // Vérifier la taille du fichier
            if($_FILES["fichiertelechargement"]["size"] > 500000) 
            {
              echo "Déssolé, votre fichier est trop volumineux.";
              $telecharementok = 0;     
            }
        
            // Autoriser certains formats de fichiers
            if($type_fichier != "jpg" && $type_fichier != "jpeg"  && $type_fichier != "png" && $type_fichier != "gif" ){
              echo "Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés";
              $telecharementok = 0;    
            }
        
            // Vérifie si $telecharementok est mis à 0 par une erreur
            if($telecharementok == 0)
            {
                echo "Désolé, votre fichier n'a pas été télécharger.";
            }else{
                
                // si tout va bien, essayez de télécharger le fichier
                if(move_uploaded_file($_FILES["fichiertelechargement"]["tmp_name"],$chemin_fichier)){
                    echo " le fichier ".htmlspecialchars(basename($_FILES["fichiertelechargement"]["name"]))." a été téléchargé.";
                }else {
                    echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
                }
            }
         }
            
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            <h4>Selectionner le fichier a telecharger </h4>
            <input type="file" name="fichiertelechargement" id="fichiertelechargement">
            <input type="submit" value="fichier telechargement" name="submit">
        </form>
    </body>
</html>