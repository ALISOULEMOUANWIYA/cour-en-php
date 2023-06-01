
<html>
<body>
   <?php  
    // classe Parent
      abstract class ClasseParent{ 
          abstract protected function prexFixNom($nom) : string;
      }
    
    // Classes Enfants
    class ClasseEnfant extends ClasseParent{
    // La classe enfant peut définir des arguments optionnels qui ne sont pas dans la méthode abstraite du parent
        private $reponsefinale; 
        public function prexFixNom($nom, $separateur = ".", $saluer1 = "Chèr", $saluer2 = "Chère") : string{
            
            if($nom === "Ali Soule"){
                $prefix = "Mr";
            }elseif($nom === "Ichata Moussa"){
                $prefix = "Mrs";
            }else{
                $prefix = "";
            }
            if($prefix === "Mr"){
              $reponsefinale = "$saluer1 $prefix $separateur $nom ";   
            }elseif($prefix === "Mrs"){
               $reponsefinale = "$saluer2 $prefix $nom ";  
            }else{
                $reponsefinale = "";
            }
            return($reponsefinale);
        }
    }
    // Créer des objets à partir des classes enfants
    $instanceEnfant = new ClasseEnfant;
    echo $instanceEnfant->prexFixNom("Ali Soule");
    echo "<br>";
    echo $instanceEnfant->prexFixNom("Ichata Moussa");

    ?>

    
</body>
</html>