
<html>
<body>
    <h3>Creation D'un FICHIER fichier</h3>
    <?php 
    $myfile =  fopen("Dossier3/dossier2/dossier1/Fichier.txt","x") or die("Uneble to open fil");
    $txt = "Minnie Mouse\n";
    fwrite($myfile, $txt);
        fclose($myfile);
    ?>
</body>
</html>