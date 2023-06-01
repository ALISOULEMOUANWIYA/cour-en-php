<?php
namespace src\model;
use libs\system\model;

class RolesDb extends model
{
    public function findAll()
    {
        // return array("ROLE_COMPTA", "ROLE_FINANCE");
        return $this->entityManager
                    ->createQuery("SELECT r FROM Roles r")
                    ->getResult();
    }
}
?>