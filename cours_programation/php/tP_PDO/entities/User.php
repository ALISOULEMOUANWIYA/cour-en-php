<?php
class User{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $etat;


    public function getId(): int{
        return $this->id;
    }
    public function getNom(): string{
        return $this->nom;
    }
    public function getPrenom() : string
    {
        return $this->prenom;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    public function getEtat(): string
    {
        return $this->etat;
    }
    

    public function setId(int $valeur){
       $this->id = $valeur;
    }
    public function setNom(string $valeur){
        $this->nom = $valeur;
    }
    public function setPrenom(string $valeur)
    {
        $this->prenom = $valeur;
    }
    public function setEmail(string $valeur)
    {
        $this->email = $valeur;
    }
    public function setPassword(string $valeur)
    {
        $this->password = $valeur;
    }
    public function etEtat(string $valeur)
    {
        $this->etat = $valeur;
    }

}

?>