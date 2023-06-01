<?php
//    namespace php_Avancer2_POO;
    namespace php_Avancer2_POO\h;
    class Table{
        public $title = "";
        public $numRows = 0;
        public function message(){
            echo "<ul><li>Table '{$this->title}' has {$this->numRows} rows.</li></ul>";
        }
    }


?>
