<?php
class ConnectionDB{
    //Les Paramétres de connexion
    private $host = 'localhost'; // nom de l'host
    private $name = 'groupe_gl';// nom de la basz de sonnée
    private $user = 'root'; // utilisateur
    private $password = ''; // mot de passe (sur mac on met root au lieu d'un champs vide '') 
    private $Connexion;
    
    function __construct($host =null, $name = null, $user = null, $password = null){
        if($host != null){
            $this->host = $host;
            $this->name = $name;
            $this->user = $user;
            $this->password = $password;
        }
        try{
            $this->Connexion = new PDO('mysql:host='.$this->host.';dbname='.$this->name, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8MB4', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }catch(PDOException $exe){
            echo "Erreur : Impossible de se connecter à la base de donnée !";
            die();
        }
    }
    public function connexion(){
        return($this->Connexion);
    } 
}
    $DB = new ConnectionDB;
    $BDD = $DB->connexion();

?>