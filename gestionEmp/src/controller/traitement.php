<?php
    $prenomEmp = $NomEmp  = $ServiceEmp = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $prenomEmp = test_input($_POST["prenom"]);  
    $NomEmp = test_input($_POST["nom"]); 
    $ServiceEmp = test_input($_POST["service"]);    
    if (empty($_POST["$prenomEmp"]) && empty($_POST["$NomEmp"]) && empty($_POST["$ServiceEmp"])){
       $id="";
       $ajouterCompt = new ClassSet($prenomEmp, $NomEmp, $ServiceEmp, $id, $BDD);
    }
}
function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return ($data);
}
?>