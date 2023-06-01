    <?php
        // // Démarre la session
        session_start();
    ?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
              border: 1px solid black;
              border-collapse: collapse;
            }
            td {
              padding: 5px;
              color: darkslategrey;
            }
        </style>
    </head>
    <body>
        <h4>Filter Extension</h4>
        <table>
            <tr>
                <td> Filtre ID</td> <td> Filtre Nom</td> 
            </tr>
        <?php 
            foreach(filter_list() as $id => $filter){
              echo '<tr>
                      <td>'. $id.'</td> <td>'.$filter.'</td>
                    </tr>';  
            }
         ?>
        </table>
        <?php 
           $str = "<h4>filter_var(), fonction</h4>";
           $newstr = filter_var($str, FILTER_SANITIZE_STRING);
           echo $newstr;
        
           echo("<h4>Valider un entier</h4>");
           $int = 100;
           if(!filter_var($int , FILTER_VALIDATE_INT) === false){
               echo("Integer est valide <br>");
           }else{
               echo("Integer n'est pas valide");
           }
        
           echo("<h4>filter_var() et problème avec 0</h4>");
           $entiere = 0;
            if(filter_var($entiere , FILTER_VALIDATE_INT) === 0 || !filter_var($entiere , FILTER_VALIDATE_INT) === false){
               echo("Integer est valide <br>");
           }else{
               echo("Integer n'est pas valide <br>");
           } 

           echo("<h4>Valider une adresse IP</h4>");
           $address_IP = "127.0.0.1";
            if(!filter_var($address_IP , FILTER_VALIDATE_IP) === false){
               echo("addres IP est valide <br>");
           }else{
               echo("addres IP n'est pas valide <br>");
           } 

           echo("<h4>Désinfecter et valider une adresse e-mail</h4>");
           $email = "rachnel83Keyz@Exemple.com";
           // Supprime tous les caractères illégaux de l'e-mail
            $email = filter_var($email , FILTER_SANITIZE_EMAIL);
           if(!filter_var($email , FILTER_VALIDATE_EMAIL) === false){
               echo("EMAIL est valide <br>");
           }else{
               echo("EMAIL n'est pas valide <br>");
           }

           echo("<h4>Nettoyer et valider une URL</h4>");
           $urlSite = "https://www.vision.com";
           // Supprime tous les caractères illégaux de URL
           $urlSite = filter_var($urlSite , FILTER_SANITIZE_URL);
           if(!filter_var($urlSite , FILTER_VALIDATE_URL) === false){
               echo("URL est valide <br>");
           }else{
               echo("URL n'est pas valide <br>");
           }
         ?>
    </body>
</html>