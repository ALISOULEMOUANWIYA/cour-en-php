<?php
use Doctrine\ORM\Mapping  as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
    class User
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
        private $prenom;

        /**
        * @ORM\Column(type="string")
        * @var string
        */
        private $email;

        /**
        * @ORM\Column(type="string")
        * @var string
        */
        private $password;

        /**
         * One user has many lieu. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Lieu", mappedBy="user")
         */
        private $lieu;

        /**
         * Many Users have Many Groups.
         * @ORM\ManyToMany(targetEntity="Roles", inversedBy="users")
         * @ORM\JoinTable(name="user_roles")
         */
        private $role;

        public function __construct()
        {
            $this->lieu = new ArrayCollection();
            $this->role = new ArrayCollection();
        }

        public function getId(): int{
            return($this->id);
        }

        public function getNom(): string{
            return($this->nom);
        }

        public function getPrenom(): string{
            return($this->prenom);
        }

        public function getEmail(): string{
            return($this->email);
        }

        public function getPassword(): string{
            return($this->password);
        }

        public function getLieu(): string{
            return($this->lieu);
        }

        public function getRole(): string{
            return($this->role);
        }

        public function setId(int $valeur){
            $this->id = $valeur;
        }

        public function setNom(string $valeur){
            $this->nom = $valeur;
        }

        public function setPrenom(string $valeur){
            $this->prenom = $valeur;
        }

        public function setEmail(string $valeur){
            $this->email = $valeur;
        }

        public function setPassword(string $valeur){
            $this->password = $valeur;
        }

        public function setLieu(string $valeur){
            $this->lieu = $valeur;
        }

        public function setRole(string $valeur){
            $this->role = $valeur;
        }

        
    }
    
?>