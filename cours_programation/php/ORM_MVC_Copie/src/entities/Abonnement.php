<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="abonnement")
 */
class Abonnement
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
     * One Abonnement have one Client. This is the owning side.
     *@ORM\ OneToOne(targetEntity="Client", mappedBy="abonnement")
     */
    private $client;

    /**
     * Many Abonnement have One User. This is the owning side.
     * @ORM\ ManyToOne(targetEntity="User", inversedBy="abonnement")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * One Abonnement have Many attributes . This is the owning side.
     * @ORM\ OneToMany(targetEntity="Attribut", mappedBy="abonnement")
     */
    private $attribut;

    public function __construct()
    {
        $this->user = new ArrayCollection();
        $this->client = new ArrayCollection();
        $this->attribut = new ArrayCollection();
    }

    public  function getId()
    {
        return $this->id;
    }
    public  function setId($id)
    {
        $this->id = $id;
    }

    public  function getNom()
    {
        return $this->nom;
    }
    public  function setNom($nom)
    {
        $this->nom = $nom;
    }

    public  function getPrenom()
    {
        return $this->prenom;
    }
    public  function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public  function getUser()
    {
        return $this->user;
    }
    public  function setUser($user)
    {
        $this->user = $user;
    }

    public  function getClient()
    {
        return $this->client;
    }
    public  function setClient($client)
    {
        $this->client = $client;
    }

    public  function getAttribut()
    {
        return $this->attribut;
    }
    public  function setAttribut($attribut)
    {
        $this->attribut = $attribut;
    }
}
