<?php 
    class saluer{
      public static $salutation = "Salue ";
    }
    class x extends saluer{
        public function xstatic(){
            return(parent::$salutation);
        }
    }

    // obetenir la valeur de l'objet static directement via la classe enfant
    echo x::$salutation;

    // ou obtenir la valeur de la propriété statique via la méthode xStatic ()
    $x = new x();
    echo $x->xstatic(); 
?>