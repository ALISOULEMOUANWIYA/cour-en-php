<?php
// Tableau avec des noms
$a[] = "Anna";
$a[] = "ALi Soule";
$a[] = "Mouanwiya";
$a[] = "Bretagne";
$a[] = "Cendrillon";
$a[] = "Diane";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophélie";
$a[] = "Pétunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// récupère le paramètre q depuis l'URL
$q = $_REQUEST['q'];

$hint = "";

// recherche tous les indices du tableau si $ q est différent de ""
if($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);
  foreach($a as $name){
    if(stristr($q, substr($name, 0, $len))) {
      if($hint === "") {
        $hint = $name;
      }else{
        $hint .= "<br> $name";
      }
    }
  }
}
    // Affiche "aucune suggestion" si aucun indice n'a été trouvé ou affiche les valeurs correctes
    echo $hint === ""? "aucune suggestion": $hint; 
?>