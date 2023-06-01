<?php



use Doctrine\ORM\Mapping as ORM;
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

    // /**
    //  * @ORM\Column(type="string")
    //  * @var string
    //  */
    // private $telephone;

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

    // /**
    //  * @ORM\Column(type="blob")
    //  */
    // private $imge;

    /**
     * many user have One village . This is the inverse side.
     * @ORM\ManyToOne(targetEntity="Village", inversedBy="user")
     * @ORM\JoinColumn(name="Village_id", referencedColumnName="id")
     */
    private $village;

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
     */
    private $consommation;

    /**
     * Many user has One reglement. This is the inverse side.
     * @ORM\ManyToOne(targetEntity="Reglement", inversedBy="user")
     * @ORM\JoinColumn(name="reglement_id", referencedColumnName="id")
     */
    private $reglement;

    /**
     * Many User have Many Roles.
     * @ORM\ManyToMany(targetEntity="Roles", inversedBy="user")
     * @ORM\JoinTable(name="user_roles")
     */
    private $roles;

    public function __construct()
    {
        $this->reglement = new ArrayCollection();
        $this->village = new ArrayCollection();
        $this->abonnement = new ArrayCollection();
        $this->facture = new ArrayCollection();
        $this->attribut = new ArrayCollection();
        $this->compteur = new ArrayCollection();
        $this->consommation = new ArrayCollection();
        $this->roles = new ArrayCollection();
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

    // public function getImage()
    // {
    //     return ($this->imge);
    // }

    public function getVillage()
    {
        return ($this->village);
    }

    public function getRoles()
    {
        return ($this->roles);
    }

    public function getAbonnement(): string
    {
        return ($this->abonnement);
    }

    public function getCompteur(): string
    {
        return ($this->compteur);
    }

    public function getReglement()
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

    // public function setImage($img)
    // {
    //     $this->imge = $img;
    // }

    public function setVillage(int $valeur)
    {
        $this->village = $valeur;
    }

    public function setRoles(string $valeur)
    {
        $this->roles = $valeur;
    }

    public function setAbonnement(string $valeur)
    {
        $this->abonnement = $valeur;
    }

    public function setCompteur(string $vleur)
    {
        $this->compteur = $vleur;
    }

    public function setReglement(int $vleur)
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
