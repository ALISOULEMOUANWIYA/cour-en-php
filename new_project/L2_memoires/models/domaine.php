<?php
    require_once 'dataSource.php';

    function getDomaines()
    {
        $req = "SELECT * from domaine ORDER by nomDomaine"; 
        global $ds;

        //Executer la requete
        $exe = $ds ->query($req);
        $tabDoamaines = $exe -> fetchAll();
        return $tabDoamaines;
    }