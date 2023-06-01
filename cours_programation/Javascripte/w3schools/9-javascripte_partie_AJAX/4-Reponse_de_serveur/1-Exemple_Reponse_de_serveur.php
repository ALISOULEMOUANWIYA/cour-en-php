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
        <h2>GET Requests</h2>
        <div id = "myDIV">
            <p id = "demo1"></p>
        </div>
        <Button id="Button1" onclick="starDOc()">button</Button>
     <script>
        document.getElementById("Button1").addEventListener("click", starDOc);
        function starDOc(){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("demo1").innerHTML = this.responseText;
             }
          };
          xhttp.open("GET", "../ajax_info.php", true);
          xhttp.send();
        }
/*
onreadystatechange: Définit une fonction à appeler lorsque la propriété readyState change

readyState: Contient l'état de XMLHttpRequest.
            0: requête non initialisée
            1: connexion au serveur établie
            2: demande reçue
            3: traitement de la demande
            4: la demande est terminée et la réponse est prête
status: 
            200: "OK"
            403: "Interdit"
            404 Page non trouvée"
            
statusText: Renvoie le texte du statut (par exemple "OK" ou "Not Found")

*/
      </script>
    </body>
  </html>