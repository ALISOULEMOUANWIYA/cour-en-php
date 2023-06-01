<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="roles")
 */
class Roles
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
     * Many Roles have Many Users.
     * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
     */
    private $users;


    public function __construct()
    {
        $this->roles = new ArrayCollection();
        $this->users = new ArrayCollection();
    }



    public  function getId(): int
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
    public  function getUsers()
    {
        return $this->users;
    }
    public  function setUsers($users)
    {
        $this->users = $users;
    }
}
