<?php
    $prenomEmp = $NomEmp  = $ServiceEmp = "";
    $id = 0;
if(isset($_POST['Modifier'])){
        $prenomEmp = test_input($_POST["prenomUtilisateu"]);  
        $NomEmp = test_input($_POST["nomUtilisateur"]); 
        $ServiceEmp = test_input($_POST["ServiceColection"]);
        $id = $_POST["idComp"];
        if (empty($_POST["$prenomEmp"]) && empty($_POST["$NomEmp"]) && empty($_POST["$ServiceEmp"])){
//            echo "id = $id , nom = $NomEmp , prenom = $prenomEmp , service = $ServiceEmp";
           $ajouterCompt = new ClassSet($prenomEmp, $NomEmp, $ServiceEmp, $id, $BDD);
            header("Location: src/pages/listEmp.php");
        }
}else{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $prenomEmp = test_input($_POST["prenomUtilisateu"]);  
        $NomEmp = test_input($_POST["nomUtilisateur"]); 
        $ServiceEmp = test_input($_POST["ServiceColection"]); 
        $id = (int)$id;
        if (empty($_POST["$prenomEmp"]) && empty($_POST["$NomEmp"]) && empty($_POST["$ServiceEmp"])){
//                        echo "id = $id , nom = $NomEmp , prenom = $prenomEmp , service = $ServiceEmp";
           $ajouterCompt = new ClassSet($prenomEmp, $NomEmp, $ServiceEmp, $id, $BDD);
        }
    }
}
function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return ($data);
}
?>