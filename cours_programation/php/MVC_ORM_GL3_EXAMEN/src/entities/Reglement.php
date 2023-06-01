<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="facture")
 */
class Reglement
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
     * One Reglement have Many user. This is the owning side.
     * @ORM\ OneToMany(targetEntity="User", mappedBy="reglement")
     */
    private $user;

    /**
     * One reglement have Many facture. This is the owning side.
     * @ORM\ OneToMany(targetEntity="Facture", mappedBy="reglement")
     */
    private $facture;

    public function __construct()
    {
        $this->user = new ArrayCollection();
        $this->facture = new ArrayCollection();
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

    public  function getFacture()
    {
        return $this->facture;
    }
    public  function setFacture($valeur)
    {
        $this->facture = $valeur;
    }
}
