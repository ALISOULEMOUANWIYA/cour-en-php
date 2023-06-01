<?php

declare(strict_types=1);

    class Service{
        //definition des attributs
        private $idS;
        private $nomS;
        private $portS;
        private $etatS;
        private $serveur;

        //definition des constructeurs
        public function __construct ()
        {
            $num = func_num_args();
            $args = func_get_args();
            switch($num)
            {
                case 0:
                    $this->constructeurSansArgumant();
                    break;
                case 3:
                    $this->constructeurAvecArgument($args[0] , $args[1], $args[2], $args[3], $args[4]) ;
                    break;
            }
        }
        private function constructeurSansArgumant()
        { 

        }
        private function constructeurAvecArgument($idS, $nomS, $portS, $etatS, $serveur)
        {
            $this->idS = $idS;
            $this->nomServ = $nomS;
            $this->portS = $portS;
            $this->etatS = $etatS;
            $this->serveur = $serveur;
            
        }

        function getIdS()
        {
            return $this->idS;
        }
        function getNomS()
        {
            return $this->nomServ;
        }
        function getPortS()
        {
            return $this->portS;
        }
        function getEtatS()
        {
            return $this->etatS;
        }
        function getServeur(): Serveur
        {
            return $this->serveur;
        }


        function setIdS($idS)
        {
            $this->idS = $idS;
        }
        function setNomS($nomServ)
        {
            $this->nomServ = $nomServ;
        }
        function setPortS($portS)
        {
            $this->portS = $portS;
        }
        function setEtatS($etatS)
        {
            $this->etatS = $etatS;
        }
        function setServeur($serveur)
        {
            $this->serveur = $serveur;
        }


    }

?>