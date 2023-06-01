<?php
use Doctrine\ORM\Mapping  as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="roles")
 */
    class Roles
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
         * Many Roles have Many Users.
         * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
         */
        private $users;

        public function __construct()
        {
            $this->users = new ArrayCollection();
        }

        public function getId(): int{
            return($this->id);
        }

        public function getNom(): string{
            return($this->nom);
        }

        public function getUser(): string{
            return($this->user);
        }

        public function setId(int $valeur){
            $this->id = $valeur;
        }

        public function setNom(string $valeur){
            $this->nom = $valeur;
        }

        public function setUser(string $valeur){
            $this->userx = $valeur;
        }

        
    }
    
?>