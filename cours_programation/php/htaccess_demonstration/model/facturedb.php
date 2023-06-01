<?php
require_once 'db.php';
  class facturedb{
    private $factureListe = "", $etatListe = "";

    public function __construct(){
        $this->database = new db();
    }

    public function addFacture($dates, $consommation, $prix, $paiment){
        $requete = "INSERT INTO facture(dates, consommation, prix, paiement) VALUE(?, ?, ?, ?)";
        $queryprepare = $this->database->getDBB()->prepare($requete);
        // Exécuter la requête 
        $queryprepare->execute(array($dates, $consommation, $prix, $paiment));
        //return un boolan
        echo ("Une Facture vienne d'être ajouter 🙂");
    }

      private function UpadteFacture($idF){
        $requete = "UPDATE facture SET  paiment = ? WHERE idF = ?";
        $queryprepare = $this->database->getDBB()->prepare($requete);
        // Exécuter la requête 
        $queryprepare->execute(array(1, $idF));
        //return un boolan
        return($queryprepare);
        }

        private function listeFacture(){
            $requete = "SELECT * FROM facture";
            $queryprepare = $this->database->getDBB()->prepare($requete);
            // Exécuter la requête 
            $queryprepare->execute();
            //return un boolan
            return($queryprepare->fetchAll());
        }

        public function afficherListeFacture(){
            $i=0;
            if(count($this->listeFacture()) > 0){
                foreach($this->listeFacture() as $key => $row ){
                  $i += 1;
                  if ($i % 2 == 0) {
                    $this->factureListe .= " 
                        <tr classe='success'>
                            <td>".$i."</td>
                            <td>".$row[1]."</td>
                            <td>".$row[2]."</td>
                            <td>".$row[3]."</td>
                            <td>".$row[4]."</td>
                        </tr>
                    ";
                  }else {
                    $this->factureListe .= " 
                    <tr classe='warning'>
                        <td>".$i."</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                        <td>".$row[3]."</td>
                        <td>".$row[4]."</td>
                    </tr>
                ";
                  }

                }
            }
              echo $this->factureListe ;
        }

        public function afficherListeEtat(){
          $i=0;
          if(count($this->listeFacture()) > 0){
            $this->etatListe .= "<option value=''>Faites votre choix</option>";
              foreach($this->listeFacture() as $key => $row ){
                  $this->etatListe .= " 
                      <option value='$row[0]'> ID Produit : 
                        ".$row[0]."
                      </option>
                  ";
                  
              }
          }
            echo $this->etatListe ;
      }
  }
?>