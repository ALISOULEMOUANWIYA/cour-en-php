<?php
namespace libs\system;

use function PHPSTORM_META\type;

class bootstrap
{

    public function __construct()
    { 
        
        if(isset($_GET["url"])){
            $url =  explode("/", $_GET["url"]);
            $controller_file = "src/controller/".$url[0]."Controller.php";
            if (file_exists($controller_file)) {
                require_once $controller_file; 
                $Controller = $url[0]."Controller";
                if (class_exists($Controller, true)) {
                    $controller_object = new $Controller();
                    if (isset($url[2])) {
                        $methode = $url[1];
                        if (method_exists($controller_object, $methode)) {
                            if ((int)$url[count($url)-1] > 0) {
                                $controller_object->$methode($url[count($url)-1]);
                            }               
                        }else {
                            die($methode." n'existe pas dans le controlleur ".$Controller);
                        }
                    }elseif (isset($url[1])) {
                        $methode = $url[1];
                        if (method_exists($controller_object, $methode)) {
                            if ((int)$url[count($url)-1] == 0) {
                                $compteurAccer = 0;
                                foreach ($controller_object->tableau as $valeur) {
                                    if (!hash_equals($methode, $valeur)) {
                                        $compteurAccer += 1;
                                    }
                                }
                                if ($compteurAccer == sizeof($controller_object->tableau)) {
                                    $controller_object->$methode();
                                }
                            } 
                        }else {
                            die($methode." n'existe pas dans le controlleur ".$Controller);
                        }
                    }
                }elseif ( !class_exists($Controller, false)){
                    echo "Classe : ".$Controller."() introuvable";
                }
            }else {
               die($controller_file." n'exisite pas ");
            }
        }else {
            echo "MVC";
        }    
    }

}

?>