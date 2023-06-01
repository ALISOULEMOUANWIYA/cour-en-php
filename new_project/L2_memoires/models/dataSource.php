<?php
    define("SERVER","localhost");
    define("DB_NAME","l2_memories");
    define("USER","root");
    define("PASSWORD","root");

    //Definir le domaine Server name (DSN)
    $dsn = 'mysql:host='.SERVER.';dbname='.DB_NAME.';charset=utf8';

    //Option de PDO pour la gestion 
    $tabOptions = array(
        PDO ::ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION
    );

    //creation d'instance PDO
    try {
        $ds = new PDO($dsn,USER,PASSWORD) ;
    } catch (PDOException $e) {
        die ('Votre erreur est : '.$e->getMessage());
    }
    