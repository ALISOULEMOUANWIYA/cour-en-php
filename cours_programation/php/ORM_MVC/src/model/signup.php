<?php

namespace src\model;

use libs\system\Model;

class signup extends Model
{
  private $messageEr;
  public function __construct()
  {
    parent::__construct();
  }

  public function getConnection($email)
  {
    return $this->entityManager
      ->createQuery("SELECT u FROM User u WHERE u.email = :em")
      ->setParameter('em', $email)
      ->getResult(); //array(Object)

  }

  public function ControllerSaisie($Nom, $Prenom, $email, $password)
  {
    if (!empty($Nom) && !empty($Prenom) && !empty($email)  && !empty($password)) {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        if ($this->getConnection($email) != null) {
          return "cette email : $email - existe déjà ";
        } else {
          if (isset($_FILES['image'])) {
            $img_nom = $_FILES['image']['name']; // nom image
            $tmp_nom = $_FILES['image']['tmp_name']; //nom temporere

            $img_explode = explode('.', $img_nom);
            $img_extension = end($img_explode);

            $extension = ['png', 'PNG', 'jpeg', 'JPEG', 'jpg', 'JPG'];
            if (in_array($img_extension, $extension) === true) {
              $time = time();
              $new_img_name = $time . $img_nom;
              if (move_uploaded_file($tmp_nom, "public/assets/images/" . $new_img_name)) {
                //$this->insert($Prenom, $Nom, $email, $password, $new_img_name);
                return "";
              }
            } else {
              return "Please select an image file - ['png', 'PNG', 'jpeg', 'JPEG', 'jpg', 'JPG']";
            }
          } else {
            return "Please select an image file - ['png', 'PNG', 'jpeg', 'JPEG', 'jpg', 'JPG']";
          }
        }
      } else {
        return  "Email invalide";
      }
    }
  }
  public function insert($Prenom, $Nom, $email, $password, $new_img_name)
  {
    $requete = "INSERT INTO users(unique_id, fname, lname, email,  password, img, status) VALUE(?,?,?,?,?,?,?)";
    $queryprepare = $this->database->getDBB()->prepare($requete);
    // Exécuter la requête 
    $queryprepare->execute(array($random_id, $Prenom, $Nom, $email, $password,  $new_img_name, $status));
    echo "Success";
    //return un boolan  
  }
}
