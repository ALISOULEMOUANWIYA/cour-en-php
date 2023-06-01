<?php



use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    // /**
    //  * @ORM\Column(type="string")
    //  * @var string
    //  */
    // private $telephone;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $password;


    public function __construct()
    {
    }

    public function getId(): int
    {
        return ($this->id);
    }

    public function getEmail(): string
    {
        return ($this->email);
    }

    public function getPassword(): string
    {
        return ($this->password);
    }

    public function setId(int $valeur)
    {
        $this->id = $valeur;
    }

    public function setEmail(String $valeur)
    {
        $this->email = $valeur;
    }

    public function setPassword(String $valeur)
    {
        $this->password = $valeur;
    }
}
