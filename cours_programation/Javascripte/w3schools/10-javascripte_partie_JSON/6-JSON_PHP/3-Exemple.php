<!DOCTYPE html>
  <html>
  <head>
    <style>
        #myDIV {
          background-color: #211f1f;
          border: 1px solid;
          padding: 50px;
          color: white;
          font-size: 20px;
        }
        table,th,td {
          border : 1px solid black;
          border-collapse: collapse;
        }
        th,td {
          color: aliceblue;
          padding: 5px;
        }
     </style>
    </head>
    <body>
        <h2> Base de données PHP </h2>
        <div id = "myDIV">
            <ul>
                <li>Convertissez la requête en objet, en utilisant la fonction PHP json_decode().
                </li>
                <li>Accédez à la base de données et remplissez un tableau avec les données demandées.
                </li>
                <li>Ajoutez le tableau à un objet et renvoyez l'objet au format JSON à l'aide de la fonction json_encode().
                </li>
            </ul>
            <p id="demo1"></p>
            <Button id="Button1" onclick="starDOc()">button</Button>
        </div>
        
     <script>
        function starDOc(){
            var textes = "";
            var objetLimite = {"limit": 10};
            var dbParam = JSON.stringify(objetLimite);
            var monObjet;
            
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if(this.readyState == 4 && this.status == 200) {
                monObjet = JSON.parse(this.responseText); 
                for(var i in monObjet){
                    textes += monObjet[i].nom+"<br>";
                }
                document.getElementById("demo1").innerHTML = textes; 
              }
            };
            xmlhttp.open("GET", "Afficher.php?x="+dbParam, true);
            xmlhttp.send();
        }
      </script>
    </body>
  </html>