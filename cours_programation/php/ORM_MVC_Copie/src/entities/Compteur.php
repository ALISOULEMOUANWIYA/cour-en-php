<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="compteur")
 */
class Compteur
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
    private $nomCompteur;

    /**
     * Many Compteur have One user. This is the owning side.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="compteur")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * One Compteur have Many attribut. This is the owning side.
     * @ORM\ OneToMany(targetEntity="Attribut", mappedBy="compteur")
     */
    private $attribut;

    /**
     * One Compteur have Many consommation. This is the owning side.
     * @ORM\OneToMany(targetEntity="Consommation", mappedBy="compteur")
     */
    private $consommation;

    public function __construct()
    {
        $this->user = new ArrayCollection();
        $this->attribut = new ArrayCollection();
        $this->consommation = new ArrayCollection();
    }

    public  function getId(): int
    {
        return $this->id;
    }
    public  function setId(int $id)
    {
        $this->id = $id;
    }

    public  function getNomCompteur(): string
    {
        return $this->nomCompteur;
    }
    public  function setNomCompteur(String $valeur)
    {
        $this->nomCompteur = $valeur;
    }

    public  function getAtttribut()
    {
        return $this->attribut;
    }
    public  function setAttribut($valeur)
    {
        $this->attribut = $valeur;
    }

    public  function getUser()
    {
        return $this->user;
    }
    public  function setUser($valeur)
    {
        $this->user = $valeur;
    }

    public  function getConsommation()
    {
        return $this->consommation;
    }
    public  function setConsommation($valeur)
    {
        $this->consommation = $valeur;
    }
}
