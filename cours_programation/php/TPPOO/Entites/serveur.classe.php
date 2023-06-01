<?php

    declare(strict_types=1);
    class Serveur{
        //definition des attributs
        private $idServ;
        private $nomServ;
        private $adripServ;

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
                    $this->constructeurAvecArgument($args[0] , $args[1], $args[2]) ;
                    break;
            }
        }
        private function constructeurSansArgumant()
        { 

        }
        private function constructeurAvecArgument(int $idServ, string $nomServ, string $adripServ)
        {
            $this->idServ = $idServ;
            $this->nomServ = $nomServ;
            $this->adripServ = $adripServ;
            
        }

        function getIdServ()
        {
            return $this->idServ;
        }
        function getNomServ(){
            return $this->nomServ;
        }
        function getAdripServ(){
            return $this->adripServ;
        }

        function setIdServ($idServ)
        {
            $this->idServ = $idServ;
        }
        function setNomServ($nomServ){
            $this->nomServ = $nomServ;
        }
        function setAdripServ($adripServ){
            $this->adripServ = $adripServ;
        }

    }

?>