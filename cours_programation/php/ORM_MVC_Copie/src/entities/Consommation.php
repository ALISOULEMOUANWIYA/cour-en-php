<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="consommation")
 */
class Consommation
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
     * Many consommantion have One User. This is the owning side.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="consommation")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Many consommation have One compteur . This is the owning side.
     * @ORM\ ManyToOne(targetEntity="compteur", inversedBy="consommation")
     * @ORM\JoinColumn(name="compteur_id", referencedColumnName="id")
     */
    private $compteur;

    /**
     * one consommation have One Facture. This is the owning side.
     * @ORM\OneToOne(targetEntity="Facture", mappedBy="consommation")
     **/
    private $facture;

    public function __construct()
    {
        $this->user = new ArrayCollection();
        $this->compteur = new ArrayCollection();
        $this->facture = new ArrayCollection();
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

    public  function getCompteur()
    {
        return $this->compteur;
    }
    public  function setCompteur($valeur)
    {
        $this->compteur = $valeur;
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
