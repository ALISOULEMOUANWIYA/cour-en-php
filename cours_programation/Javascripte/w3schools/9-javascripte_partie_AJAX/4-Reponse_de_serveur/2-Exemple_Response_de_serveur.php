<! DOCTYPE html>
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
     </style>
    </head>
    <body>
        <h2>L'objet XMLHttpRequest</h2>
        <div id = "myDIV">
            <p id = "demo1"></p>
        </div>
        <Button id="Button1" onclick="starDOc('../ajax_info.txt',starDOc)">button</Button>
     <script>
        function starDOc(url, cfunction){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                cfunction(this);
             }
          };
          xhttp.open("GET", url, true);
          xhttp.send();
        }
        function maFonction(xhttp){
            document.getElementById("demo1").innerHTML = xhttp.responseText;
        }
/*
Propriétés de réponse du serveur
--------------------------------
responseText: récupère les données de réponse sous forme de chaîne
responseXML: récupère les données de réponse sous forme de données XML

Méthodes de réponse du serveur
------------------------------
getResponseHeader(): Renvoie des informations d'en-tête (header ) spécifiques à partir de la ressource serveur

getAllResponseHeaders(): Renvoie toutes les informations d'en-tête (header ) de la ressource serveur
*/
      </script>
    </body>
  </html>