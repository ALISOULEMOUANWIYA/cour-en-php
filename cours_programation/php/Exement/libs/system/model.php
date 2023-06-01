<?php

namespace libs\system;

class model
{
    protected $entityManager, $conne, $queryBuilder;
    public function __construct()
    {
        require_once "././bootstrap.php";
        $this->entityManager = $entityManager;
        $this->conne = $conne;
        $this->queryBuilder = $queryBuilder;
    }
}
