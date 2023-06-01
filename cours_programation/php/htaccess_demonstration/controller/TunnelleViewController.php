<?php
   require_once "./model/facturedb.php";
   require_once "./model/reglementdb.php";
  class TunnelleViewController{
      
      function __construct(){
          $this->fact = new facturedb();
          $this->regl = new reglementdb();
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
            $this->IncludeView('factures'); 
                break; 
        }
        // operation ternaire
        $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
            case 'importer':
                // if(isset($_POST['add'])){
                //     // extract($_POST);
                //     // $this->fact->insert($prenom, $nom, $tel);
                //     // header("Location: facturation");
                // }
                break;
                case 'sup':
                    // if(isset($_GET['id'])){
                    //     // $resultat = $this->fact->supprimer($_GET['id']);
                    //     // if ($resultat) {
                    //     //     header("Location: facturation");
                    //     }
                    // }
                break;
                case 'importerModif':
                    // if(isset($_POST['mod'])){
                    //     // extract($_POST);
                    //     // $resultat = $this->fact->modifier($id, $prenom, $nom, $tel);
                    //     // if ($resultat) {
                    //     //     header("Location: facturation");
                    //     // }
                    // }        
                break;
            default:
                # code...
                break;
        }
      }
      
      public function IncludeView($view){
          if($view =='factures'){
            //$contacts = ($this->fact)->liste();
            //include_once $view;
          }else{
              if($view == "modification" && isset($_GET['id'])){
                $resultat = $this->fact->findContactById($_GET['id']);
                include_once $view;
              }else{
                include_once $view;
              }
          }
          
      }
  }
?>