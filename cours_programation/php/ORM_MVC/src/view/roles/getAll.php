<?php
    // print_r($data);
    foreach ($data as $key => $value) {
       echo $key." : ".$value->getId()."  ".$value->getNom()."<br>";
    }
?>