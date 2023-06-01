<?php 
    class classesuprimerCoffres{
        function __construct($champAcces, $BDD){
            $sql = "DELETE FROM coffres WHERE ID_Coffres= '$champAcces'";
            $BDD->query($sql);
        }
    }

/*
                    // Modifier employe
//                     echo $this->NomEmp."__".$this->PrenomEmp."__id = ".$id."__ service = ".$service;
                        $requete = "UPDATE  employe
                        SET NomEmployer = '$this->NomEmp',
                            PrenomEmployer = '$this->PrenomEmp',
                            ServiceEmployer = '$service'
                        where  IdEmpl ='$id' ";
                        $exec = $BDD->query($requete);

*/
?>