<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="attribut")
 */
class Attribut
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
     * Many attribu have One User. This is the owning side.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="attribut")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Many attribut have One abonnement . This is the owning side.
     * @ORM\ManyToOne(targetEntity="Abonnement", inversedBy="attribut")
     * @ORM\JoinColumn(name="abonnement_id", referencedColumnName="id")
     */
    private $abonnement;

    /**
     * Many Attribut have One Compteu. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Compteur", inversedBy="attribut")
     * @ORM\JoinColumn(name="compteur_id", referencedColumnName="id")
     */
    private $compteur;

    public function __construct()
    {
        $this->user = new ArrayCollection();
        $this->abonnement = new ArrayCollection();
        $this->compteur = new ArrayCollection();
    }

    public  function getId(): int
    {
        return $this->id;
    }
    public  function setId(String $id)
    {
        $this->id = $id;
    }

    public  function getUser(): string
    {
        return $this->user;
    }
    public  function setUser(String $valeur)
    {
        $this->user = $valeur;
    }

    public  function getNom(): string
    {
        return $this->nom;
    }
    public  function setNom(String $nom)
    {
        $this->nom = $nom;
    }

    public  function getAbonnement()
    {
        return $this->abonnement;
    }
    public  function setAbonnement($valeur)
    {
        $this->abonnement = $valeur;
    }

    public  function getCompteur()
    {
        return $this->compteur;
    }
    public  function setCompteur($valeur)
    {
        $this->compteur = $valeur;
    }
}
