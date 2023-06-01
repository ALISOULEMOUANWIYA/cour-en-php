<?php
session_start(); 
    require_once 'config.php';

  class signup{
    private $messageEr; 
    public function __construct(){
        $this->database = new Database();
    }
    public function ControllerSaisie($Nom, $Prenom, $email, $password){
      if(!empty($Nom) && !empty($Prenom) && !empty( $email)  && !empty($password)){
          if(filter_var($email, FILTER_VALIDATE_EMAIL)){
              $query = $this->database->getDBB()->prepare("SELECT email FROM users WHERE email = ?");
              $query->execute(array($email));
              if($query->fetch() != null){
                  echo "cette email : $email - existe déjà ";
              }
              else{ 
                if(isset($_FILES['image'])){
                  $img_nom = $_FILES['image']['name'];// nom image
                  $tmp_nom = $_FILES['image']['tmp_name'];//nom temporere
                    
                  $img_explode = explode('.',$img_nom);
                  $img_extension = end($img_explode);
                      
                  $extension = ['png', 'PNG', 'jpeg', 'JPEG', 'jpg', 'JPG'];
                   if(in_array($img_extension,$extension)===true){
                      $time = time();
                      $new_img_name = $time.$img_nom;
                      if(move_uploaded_file($tmp_nom, "../../assets/images/".$new_img_name)){
                        $status = "Active maintenant";
                        $random_id = rand(time(), 10000000);
                        $this->insert($random_id, $Prenom, $Nom, $email, $password, $new_img_name, $status);
                      }
                   }else{
                    echo "Please select an image file - ['png', 'PNG', 'jpeg', 'JPEG', 'jpg', 'JPG']";
                   }
                 }else{
                  echo "Please select an image file - ['png', 'PNG', 'jpeg', 'JPEG', 'jpg', 'JPG']";
                }
              }
          }else{
            echo  "Email invalide";   
          }
      }
    }
    public function insert($random_id, $Prenom, $Nom, $email, $password, $new_img_name, $status){
        $requete = "INSERT INTO users(unique_id, fname, lname, email,  password, img, status) VALUE(?,?,?,?,?,?,?)";
        $queryprepare = $this->database->getDBB()->prepare($requete);
          // Exécuter la requête 
        $queryprepare->execute(array($random_id, $Prenom, $Nom, $email, $password,  $new_img_name, $status));
        echo "Success";
          //return un boolan  
    }
  }
?>