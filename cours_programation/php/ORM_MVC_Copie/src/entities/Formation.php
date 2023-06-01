<?php
use Doctrine\ORM\Mapping  as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="formation")
 */ 
    class Formation
    {
        /**
        * @ORM\Id
        * @ORM\GeneratedValue
        * @ORM\Column(type="integer")
        * @var int
        */
        private $id;

        /**
        * @ORM\Column(type="string")
        * @var string
        */
        private $nom;

        /**
        * @ORM\Column(type="string")
        * @var string
        */
        private $date;

        /**
         * Many formation have one lieu. This is the owning side.
         * @ORM\ManyToOne(targetEntity="Lieu", inversedBy="formation")
         * @ORM\JoinColumn(name="lieu_id", referencedColumnName="id")
         */
        private $lieu;

        /**
        * @ORM\Column(type="integer")
        * @var int
        */
        private $duree;

        public function __construct()
        {
            $this->lieu = new ArrayCollection();
        }


        public function getId(): int{
            return($this->id);
        }

        public function getNom(): string{
            return($this->nom);
        }

        public function getDate(): string{
            return($this->date);
        }

        public function getLieu(): string{
            return($this->lieu);
        }

        public function getDuree(): string{
            return($this->duree);
        }

        public function setId(int $valeur){
            $this->id = $valeur;
        }

        public function setNom(string $valeur){
            $this->nom = $valeur;
        }

        public function setDate(string $valeur){
            $this->date = $valeur;
        }

        public function setLieu(string $valeur){
            $this->lieu = $valeur;
        }

        public function setDuree(string $valeur){
            $this->duree = $valeur;
        }


        
    }
    
?>