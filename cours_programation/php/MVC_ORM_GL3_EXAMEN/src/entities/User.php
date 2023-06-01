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
     * many user have One village . This is the inverse side.
     * @ORM\ManyToOne(targetEntity="Village", inversedBy="user")
     * @ORM\JoinColumn(name="vilage_id", referencedColumnName="id")
     */
    private $vilage;

    /**
     * One user has many abonnement. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Abonnement", mappedBy="user")
     */
    private $abonnement;

    /**
     * One user has many compteur. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Compteur", mappedBy="user")
     */
    private $compteur;

    /**
     * One user has many attribut. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Attribut", mappedBy="user")
     */
    private $attribut;

    /**
     * One user has many facture. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Facture",  mappedBy="user")
     */
    private $facture;

    /**
     * One user has many consommation. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Consommation",  mappedBy="user")
     * @ORM\JoinTable(name="consommation_id")
     */
    private $consommation;

    /**
     * Many user has One reglement. This is the inverse side.
     * @ORM\ManyToOne(targetEntity="Reglement", inversedBy="user")
     * @ORM\JoinTable(name="reglement_id")
     */
    private $reglement;

    /**
     * Many Users have Many role.
     * @ORM\ManyToMany(targetEntity="Roles", inversedBy="users")
     * @ORM\JoinTable(name="user_id")
     */
    private $role;

    public function __construct()
    {
        $this->reglement = new ArrayCollection();
        $this->vilage = new ArrayCollection();
        $this->abonnement = new ArrayCollection();
        $this->facture = new ArrayCollection();
        $this->attribut = new ArrayCollection();
        $this->compteur = new ArrayCollection();
        $this->consommation = new ArrayCollection();
        $this->role = new ArrayCollection();
    }

    public function getId(): int
    {
        return ($this->id);
    }

    public function getNom(): string
    {
        return ($this->nom);
    }

    public function getPrenom(): string
    {
        return ($this->prenom);
    }

    public function getEmail(): string
    {
        return ($this->email);
    }

    public function getPassword(): string
    {
        return ($this->password);
    }

    public function getVilage(): string
    {
        return ($this->vilage);
    }

    public function getRole(): string
    {
        return ($this->role);
    }

    public function getAbonnement(): string
    {
        return ($this->abonnement);
    }

    public function getCompteur(): string
    {
        return ($this->compteur);
    }

    public function getReglement(): string
    {
        return ($this->reglement);
    }

    public function getConsommation(): string
    {
        return ($this->consommation);
    }

    public function getAttribut(): string
    {
        return ($this->attribut);
    }

    public function getfacture(): string
    {
        return ($this->facture);
    }

    public function setId(int $valeur)
    {
        $this->id = $valeur;
    }

    public function setNom(String $valeur)
    {
        $this->nom = $valeur;
    }

    public function setPrenom(String $valeur)
    {
        $this->prenom = $valeur;
    }

    public function setEmail(String $valeur)
    {
        $this->email = $valeur;
    }

    public function setPassword(String $valeur)
    {
        $this->password = $valeur;
    }

    public function setVilage(string $valeur)
    {
        $this->vilage = $valeur;
    }

    public function setRole(string $valeur)
    {
        $this->role = $valeur;
    }

    public function setAbonnement(string $valeur)
    {
        $this->abonnement = $valeur;
    }

    public function setCompteur(string $vleur)
    {
        $this->compteur = $vleur;
    }

    public function setReglement(string $vleur)
    {
        $this->reglement = $vleur;
    }

    public function setConsommation(string $vleur)
    {
        $this->consommation = $vleur;
    }

    public function setAttribut(string $vleur)
    {
        $this->attribut = $vleur;
    }

    public function setfacture(string $vleur)
    {
        $this->facture = $vleur;
    }
}
