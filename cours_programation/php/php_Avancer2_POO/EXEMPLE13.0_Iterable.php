<?php
// Utilisez un argument de fonction itérable:
    function Ecrir_Iterable(iterable $myIterable){
        foreach($myIterable as $item){
            echo $item." ";
        }
    }

    $arr = ["Ali", "Soule", "Mouaniya"];
    Ecrir_Iterable($arr);
?>