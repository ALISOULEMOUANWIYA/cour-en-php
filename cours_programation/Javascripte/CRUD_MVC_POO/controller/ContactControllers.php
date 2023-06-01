<?php
   require_once "model/ContactModel.php";
  class ContactControllers{
      
      function __construct(){
          $this->contactModel = new contactModel();
      }
      
      public function viewManager(){
        $view = isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {
            case 'add':
                $this->IncludeView('ajout');
                break;
            case 'ed':
                $this->IncludeView('modification');
                break;
            default:
            $this->IncludeView('liste'); 
                break; 
        }
        // operation ternaire
        $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
            case 'importer':
                if(isset($_POST['add'])){
                    extract($_POST);
                    $this->contactModel->insert($prenom, $nom, $tel);
                    header("Location: index.php");
                }
                break;
                case 'sup':
                    if(isset($_GET['id'])){
                        $resultat = $this->contactModel->supprimer($_GET['id']);
                        if ($resultat) {
                            header("Location: index.php");
                        }
                    }
                break;
                case 'importerModif':
                    if(isset($_POST['mod'])){
                        extract($_POST);
                        $resultat = $this->contactModel->modifier($id, $prenom, $nom, $tel);
                        if ($resultat) {
                            header("Location: index.php");
                        }
                    }        
                break;
            default:
                # code...
                break;
        }
      }
      
      public function IncludeView($view){
          if($view =='liste'){
            $contacts = ($this->contactModel)->liste();
            include_once 'view/contact/'.$view.'.php';
          }else{
              if($view == "modification" && isset($_GET['id'])){
                $resultat = $this->contactModel->findContactById($_GET['id']);
                include_once 'view/contact/'.$view.'.php';
              }else{
                include_once 'view/contact/'.$view.'.php';
              }
          }
          
      }
  }
?>