<?php
    function Emaile(){
        if(empty(trim($_GET['Email'])) == false && empty(trim($_GET['Nom'])) == false){
            $Emeteur = $_GET['Email'];
            $Object = "Adérent";
            $text = "Adérent :".$_GET['Nom'];
            $recepteur = "mouanwiya30@gmail.com";
            $recepteur = "From: ".$recepteur."\r\n".
            "CC: ".$Emeteur;
            mail($Emeteur, $Object, $text, $recepteur);
            return(1);
        }else{
            return(0);
        }
    }
    echo Emaile();
?>

