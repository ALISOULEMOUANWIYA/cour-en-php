<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="village")
 */
class Village
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
     * One Village hase Many User. This is the owning side.
     * @ORM\OneToMany(targetEntity="User", mappedBy="village")
     */
    private $user;

    /**
     * One Village has Many Client. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Client", mappedBy="village")
     */
    private $client;

    public function __construct()
    {
        $this->user = new ArrayCollection();
        $this->client = new ArrayCollection();
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

    public  function getUser()
    {
        return $this->user;
    }
    public  function setUser($user)
    {
        $this->getUser = $user;
    }

    public  function getClient()
    {
        return $this->client;
    }
    public  function setClient($client)
    {
        $this->client = $client;
    }
}
