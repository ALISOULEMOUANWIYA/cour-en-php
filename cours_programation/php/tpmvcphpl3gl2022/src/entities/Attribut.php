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
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     * Many attribu have One User. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="User", inversedBy="attribut")
     * @ORM\JoinTable(name="user_id")
     */
    private $user;

    /**
     * Many attribut have One abonnement . This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Abonnement", inversedBy="attribut")
     * @ORM\JoinTable(name="abonnement_id")
     */
    private $abonnement;

    /**
     * Many Attribut have One Compteu. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Compteur", inversedBy="attribut")
     * @ORM\JoinTable(name="Compteur_id")
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
