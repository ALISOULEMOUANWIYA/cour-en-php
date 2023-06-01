<?php
namespace libs\system;

class model
{
    protected $entityManager;
    public function __construct()
    {
        require_once "././bootstrap.php";
        $this->entityManager = $entityManager;   
    }

}

?>