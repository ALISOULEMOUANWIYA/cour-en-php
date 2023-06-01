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
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     * Many facture have One user. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="User", inversedBy="facture")
     * @ORM\JoinTable(name="user_id")
     */
    private $user;

    /**
     * Many facture have One reglement. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Reglement", inversedBy="facture")
     * @ORM\JoinTable(name="reglement_id")
     */
    private $reglement;

    /**
     * one facture have One consomation. This is the owning side.
     * @ORM\ oneToOne(targetEntity="Consomation", mappedBy="facture")
     */
    private $consomation;


    public function __construct()
    {
        $this->user = new ArrayCollection();
        $this->reglement = new ArrayCollection();
        $this->consomation = new ArrayCollection();
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

    public  function getConsomation()
    {
        return $this->consomation;
    }
    public  function setConsomation($valeur)
    {
        $this->consomation = $valeur;
    }
}
