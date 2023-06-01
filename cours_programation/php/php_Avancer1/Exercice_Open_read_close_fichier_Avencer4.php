
<html>
<body>
    <h3>lire , ecrire et fermeture du fichier </h3>
    <?php 
/*
        echo "<br>ouverture et fermetur d'un fichier"."<br>";
        $myfile = fopen("testeFichier.txt","r") or die("Uneble to open fil");
        echo readfile("testeFichier.txt")."<br>";
        fclose($myfile);
*/
        
/*  
        echo "<br>lecture et fermetur d'un fichier"."<br>";
        fread($myfile, filesize("testeFichier.txt"));
        echo readfile("testeFichier.txt")."<br>";
        fclose($myfile);
*/
/*
        echo "<br>Lire une seule ligne - fgets ()"."<br>";
        $myfile = fopen("testeFichier.txt","r") or die("Uneble to open fil");
        echo fgets($myfile)."<br>";
        fclose($myfile);
*/
/*
    echo "<br>Vérifier la fin du fichier - feof ()"."<br>";
        $myfile = fopen("testeFichier.txt","r") or die("Uneble to open fil");
        while(!feof($myfile)){
          echo fgets($myfile)."<br>";   
        }
        fclose($myfile);

*/
        echo "<br>Lire un seul caractère - fgetc ()"."<br>";
        $myfile = fopen("testeFichier.txt","r") or die("Uneble to open fil");
        $conter = 0;
        while(!feof($myfile)){
          echo fgetc($myfile)."<br>";
            $conter++;
        }
        echo $conter."<br>";
        fclose($myfile);
    ?>
</body>
</html>