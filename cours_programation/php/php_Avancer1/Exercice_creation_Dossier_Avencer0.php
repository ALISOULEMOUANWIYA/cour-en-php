
<html>
<body>
    <h3>Creation D'un dossier </h3>
    <?php 
        /*
           mkdir ( string $pathname , int $mode = 0777 , bool $recursive = false , resource $context = ? ) : bool
           - is_dir() - Indique si le fichier est un dossier
           - rmdir() - Efface un dossier

        */
        // Structure de répertoire désirée
        define ("NomDossier", "Dossier3/dossier2/dossier1");
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
    ?>
</body>
</html>