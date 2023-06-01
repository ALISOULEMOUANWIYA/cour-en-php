<?php
  class menager{
      
      function __construct(){}
      
      public function viewManager(){
        $view = isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {
            case 'add':
                $this->IncludeView('inscription');
                break;
            case 'ed':
                $this->IncludeView('inscription');
                break;
            case 'user':
                $this->IncludeView('user');
                break;
            case 'chat':
                $this->IncludeView('chat');
                break;
            case 'dec':
                $this->IncludeView('deconnection');
                break;
            default:
            $this->IncludeView('connection');
                break; 
        }
      }
      public function IncludeView($view){
        if($view == 'deconnection'){
           include_once 'controllers/scripte_controller_php/'.$view.'.php';  
        }else{
           include_once 'view/page/'.$view.'.php';
        }
      }
  }
?> 