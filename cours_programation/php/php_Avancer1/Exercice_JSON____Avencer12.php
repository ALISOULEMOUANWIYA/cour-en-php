    <?php
        // // Démarre la session
        session_start();
    ?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php 
/*
            echo " <h4> json_encode()<h4> ";
            $age = array("Peter" => 35, "ben" => 37, "Joe" => 43);
            echo json_encode($age)."<br>";

            $cars = array("Volvo", "BMW", "TOYOTA");
            echo json_encode($cars)."<br>";
*/
/*
            echo " <h4> json_decode()<h4> ";
            $jsonobj1 = '{ "Peter":35, "ben":37, "Joe":43}';
            var_dump(json_decode($jsonobj1));
            
            echo "<br>";

            $jsonobj2 = '{ "ali":200, "bobe":59, "Eric":60}';
            var_dump(json_decode($jsonobj2,true));
*/
/*
            echo " <h4> Accéder aux valeurs décodées<h4> ";
            $jsonobj1 = '{ "Peter":35, "ben":37, "Joe":43}';
            $objet = json_decode($jsonobj1);
            
            echo $objet ->Peter."<br>";
            echo $objet ->ben."<br>";
            echo $objet ->Joe."<br>";

            $jsonobj2 = '{ "ali":200, "bobe":59, "Eric":60}';
            $tableau = json_decode($jsonobj1, true);
            echo $tableau["Peter"]."<br>";
            echo $tableau["ben"]."<br>";
            echo $tableau["Joe"]."<br>";
*/
            echo " <h4> Boucle à travers les valeurs<h4> ";
            $jsonobj1 = '{ "Peter":35, "ben":37, "Joe":43}';
            $objet = json_decode($jsonobj1);
            foreach($objet as $key => $value ){
               echo $key." =>".$value."<br>";
            }

            $jsonobj2 = '{ "ali":200, "bobe":59, "Eric":60}';
            $tableau = json_decode($jsonobj1, true);
            foreach($tableau as $key => $value ){
               echo $key." =>".$value."<br>";
            }
         ?>
    </body>
</html>