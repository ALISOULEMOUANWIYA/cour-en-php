<?php
use Doctrine\ORM\Mapping  as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="lieu")
 */
    class Lieu
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
        * @ORM\Column(type="decimal")
        * @var decimal
        */
        private $longitude;

        /**
        * @ORM\Column(type="decimal")
        * @var decimal
        */
        private $latitude;

        /**
         * One lieu has many formation. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Formation", mappedBy="lieu")
         */
        private $formations;

        /**
         * Many lieu have one user. This is the owning side.
         * @ORM\ManyToOne(targetEntity="User", inversedBy="lieu")
         * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
         */
        private $user;

        public function __construct()
        {
            $this->formations = new ArrayCollection();
        }

        public function getId(): int{
            return($this->id);
        }

        public function getNom(): string{
            return($this->nom);
        }

        public function getLongitude(){
            return($this->longitude);
        }

        public function getLatitude(){
            return($this->latitude);
        }

        public function getFormation(): string{
            return($this->formation);
        }

        public function getUser(): string{
            return $this->user;
        }

        public function setId(int $valeur){
            $this->id = $valeur;
        }

        public function setNom(string $valeur){
            $this->nom = $valeur;
        }

        public function setLongitude(string $valeur){
            $this->longitude = $valeur;
        }

        public function setLatitude(string $valeur){
            $this->latitude = $valeur;
        }

        public function setFormation(string $valeur){
            $this->formation = $valeur;
        }

        public function setUser(string $valeur){
            $this->user = $valeur;
        }
        
    }
    
?>