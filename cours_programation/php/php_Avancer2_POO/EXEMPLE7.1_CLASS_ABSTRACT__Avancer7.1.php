
<html>
<body>
   <?php  
    // classe Parent
      abstract class ClasseParent{ 
          abstract public function prexFixNom($nom) : string;
      }
    
    // Classes Enfants
    class ClasseEnfant extends ClasseParent{
        public function prexFixNom($nom) : string{
            if($nom === "Ali Soule"){
                $prefix = "Mr.";
            }elseif($nom === "Ichata Moussa"){
                $prefix = "Mrs.";
            }else{
                $prefix = "";
            }
            return("$prefix $nom ");
        }
    }
    // Créer des objets à partir des classes enfants
    $instanceEnfant = new ClasseEnfant("VolVo");
    echo $instanceEnfant->prexFixNom("Ali Soule");
    echo "<br>";
    echo $instanceEnfant->prexFixNom("Ichata Moussa");

    ?>

    
</body>
</html>