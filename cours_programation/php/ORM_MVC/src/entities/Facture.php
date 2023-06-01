<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="facture")
 */
class Facture
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
     * Many facture have One user. This is the owning side.
     * @ORM\ ManyToOne(targetEntity="User", inversedBy="facture")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Many facture have One reglement. This is the owning side.
     * @ORM\ ManyToOne(targetEntity="Reglement", inversedBy="facture")
     * @ORM\JoinColumn(name="reglement_id", referencedColumnName="id")
     */
    private $reglement;

    /**
     * one facture have One consomation. This is the owning side.
     * @ORM\OneToOne(targetEntity="Consommation", inversedBy="facture")
     * @ORM\JoinColumn(name="consommation_id", referencedColumnName="id")
     */
    private $consommation;


    public function __construct()
    {
        $this->user = new ArrayCollection();
        $this->reglement = new ArrayCollection();
        $this->consommation = new ArrayCollection();
    }

    public  function getId(): int
    {
        return $this->id;
    }
    public  function setId(String $id)
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

    public  function getUser()
    {
        return $this->user;
    }
    public  function setUser($valeur)
    {
        $this->user = $valeur;
    }

    public  function getReglement()
    {
        return $this->reglement;
    }
    public  function setReglement($valeur)
    {
        $this->reglement = $valeur;
    }

    public  function getConsommation()
    {
        return $this->consommation;
    }
    public  function setConsommation($valeur)
    {
        $this->consomation = $valeur;
    }
}
