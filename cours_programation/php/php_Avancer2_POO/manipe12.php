<?php
require_once "EXEMPLE12_Namspaces.php";

//use php_Avancer2_POO ;
//    $table = new php_Avancer2_POO\Table();

//use php_Avancer2_POO\h ;
//    $table = new php_Avancer2_POO\h\Table();

//use php_Avancer2_POO\h as m;
//    $table = new m\Table();

    use php_Avancer2_POO\h\Table as t;
    $table = new t();
    $table->title = "My table";
    $table->numRows = 5;
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>