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
    private $dateAbonnement;

    /**
     * @ORM\Column(type="string")
     * @var int
     */
    private $numeroAbonnement;

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
    public  function setDateAbonnement(string $valeur)
    {
        $this->dateAbonnement = $valeur;
    }
    public function getDateAbonnement(): string
    {
        // Using list method to display the datetime
        list($day, $month, $year, $hour, $min, $sec)
            = explode("/", date('d/M/Y/H/i/s'));

        // Display the datetime
        $stringDate = $month . '/' . $day . '/' . $year . ' à '
            . $hour . ':' . $min . ':' . $sec;
        $this->setDateAbonnement($stringDate);

        return $this->dateAbonnement;
    }

    public  function getNumeroAbonnement(): int
    {
        return $this->numeroAbonnement;
    }
    public  function setPrenom(int $valeur)
    {
        $this->numeroAbonnement = $valeur;
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
