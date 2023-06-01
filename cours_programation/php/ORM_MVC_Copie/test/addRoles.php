<?php
    require_once "../bootstrap.php";
    $roles = new Roles();
    $roles->setId(2);
    $roles->setNom("User_Roles");
    $entityManager->persist($roles);
    $entityManager->flush();

    echo $roles->getId();
?>