<?php
//require_once 'db.php';
class reglementdb extends db{

    private $regleListe = "";

    public function __construct(){
       parent::__construct();
    }

    public function addReglement($dates, $idF){
        $requete = "INSERT INTO reglement(dates, idF) VALUE(?,?)";
        $queryprepare = $this->getDBB()->prepare($requete);
        // Exécuter la requête 
        $queryprepare->execute(array($dates, $idF));
        //return un boolan
        echo ("Une Reglement vienne d'être ajouter 🙂");
    }

    private function listeReglemebt(){
        $requete = "SELECT * FROM reglement";
        $queryprepare = $this->getDBB()->prepare($requete);
        // Exécuter la requête 
        $queryprepare->execute();
        //return un boolan
        return($queryprepare->fetchAll());
    }
      
    public function afficherListeRegle(){
        $i=0;
        if(count($this->listeReglemebt()) > 0){
            foreach($this->listeReglemebt() as $key => $row ){
              $i += 1;
                $this->regleListe .= " 
                    <tr classe='$i'>
                        <td>".$i."</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                    </tr>
                ";
            }
        }
          echo $this->regleListe ;
    }
}
?>