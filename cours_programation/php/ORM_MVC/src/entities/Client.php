<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="client")
 */
class Client
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
    private $telephone;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $adress;

    /**
     * Many Client have One village . This is the owning side.
     * @ORM\ ManyToOne(targetEntity="Village", inversedBy="client")
     * @ORM\JoinColumn(name="village_id", referencedColumnName="id")
     **/
    private $village;

    /**
     * One Client have one Abonnement. This is the owning side.
     * @ORM\OneToOne(targetEntity="Abonnement", inversedBy="client")
     * @ORM\JoinColumn(name="abonnement_id", referencedColumnName="id")
     */
    private $abonnement;

    public function __construct()
    {
        $this->village = new ArrayCollection();
        $this->abonnement = new ArrayCollection();
    }



    public  function getId(): int
    {
        return $this->id;
    }
    public  function setId(int $id)
    {
        $this->id = $id;
    }

    public  function getNom(): string
    {
        return $this->nom;
    }
    public  function setNom(String $nom)
    {
        $this->nom = $nom;
    }

    public  function getPrenom(): string
    {
        return $this->prenom;
    }
    public  function setPrenom(String $valeur)
    {
        $this->prenom = $valeur;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }
    public function setTelephone(String $valeur)
    {
        $this->telephone = $valeur;
    }

    public function getAdress(): string
    {
        return $this->adress;
    }
    public function setAdress(string $valeur)
    {
        $this->adress = $valeur;
    }

    public  function getVillage(): string
    {
        return $this->village;
    }
    public  function setVillage(String $valeur)
    {
        $this->village = $valeur;
    }

    public  function getAbonnement(): string
    {
        return $this->abonnement;
    }
    public  function setAbonnement(String $valeur)
    {
        $this->abonnement = $valeur;
    }
}
