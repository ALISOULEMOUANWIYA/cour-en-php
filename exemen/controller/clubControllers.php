<?php
   require_once "model/clubModel.php";
  class clubControllers{
      
      function __construct(){
          $this->clubM = new clubModel();
      }
      
      public function viewPage(){
        $view = isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {
            case 'add':
                $this->IncludePage('ajouter');
                break;
            default:
            $this->IncludePage('liste'); 
                break;
        }
        // operation ternaire
        $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
            case 'importer':
                if(isset($_POST['add'])){
                    extract($_POST);
                    $this->clubM->inserer($prenom, $nom, $age, $numeroMaillot, $idclubs);
                    header("Location: index.php");
                }
                break;
            default:
                # code...
        }
      }
      
      public function IncludePage($view){
          if($view =='liste'){
            $clubs = ($this->clubM)->liste();
            include_once 'view/clubs/'.$view.'.php';
          }else{
              if($view == "ajouter"){
                $club = ($this->clubM)->listeClubs();
                include_once 'view/clubs/'.$view.'.php';
              }
          }
          
      }
  }
?>