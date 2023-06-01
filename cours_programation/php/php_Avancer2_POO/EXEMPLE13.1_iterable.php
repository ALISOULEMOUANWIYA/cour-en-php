<?php
    //Renvoie un itérable:

    function getIterable():iterable{
        return(["Ali", "Soule", "Mouaniya"]);
    }
    
    $Moniteble = getIterable();
    foreach($Moniteble as $item){
        echo $item." ";
    }
?>