<?php

/*
prev () - déplace le pointeur interne vers, et affiche, l'élément précédent dans le tableau

current () - renvoie la valeur de l'élément courant dans un tableau

end () - déplace le pointeur interne vers, et affiche, le dernier élément du tableau

reset () - déplace le pointeur interne vers le premier élément du tableau

each () - renvoie la clé et la valeur de l'élément actuel, et déplace le pointeur interne vers l'avant
*/
    class MonIterables implements iterator{
        private $tableau = [];
        private $pointeur = 0;
        
        public function __construct($tableau){
            // array_values() : s'assure que les clés sont des nombres
            $this->tableau = array_values($tableau);
        }
        
        //current() : - Renvoie l'élément sur lequel le pointeur pointe actuellement. Il peut s'agir de n'importe quel type de données
        public function current(){
            return($this->tableau[$this->pointeur]);
        }
        
        //key() : Renvoie la clé associée à l'élément courant dans la liste. Il ne peut s'agir que d'un entier, d'un flottant, d'un booléen ou d'une chaîne
        public function key(){
            return($this->pointeur);
        }
        
        //next() : Déplace le pointeur vers l'élément suivant de la liste
        public function next(){
            $this->pointeur++;
        }
        
        //rewind() : Déplace le pointeur sur le premier élément de la liste
        public function rewind(){
            $this->pointeur = 0;
        }
        
        //valid() : Si le pointeur interne ne pointe vers aucun élément (par exemple, si next() a été appelé à la fin de la liste), cela doit renvoyer false. Il renvoie vrai dans tous les autres cas
        public function valid(){
            // count() : indique le nombre d'éléments dans la liste
            return($this->pointeur < count($this->tableau));
        }
        public function getTableau(){
            return($this->tableau);
        }
    }  

    // Une fonction qui utilise des itérables
    function Ecrire_Iterable(iterable $MonIterable){
        foreach($MonIterable as $tableau){
            echo $tableau." ";
        }
        echo "<br>";
    }
    
    // Utilise l'itérateur comme itérable
    $iterator = new MonIterables(["Ali", "Soule", "Mouaniya"]);
    Ecrire_Iterable($iterator);

    var_dump(iterator_to_array($iterator));
    echo "<br>";
    var_dump(iterator_count($iterator));
    echo "<br>";
    iterator_apply($iterator, "Ecrire_Iterable",array($iterator));
?>