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
        <h2>La méthode getAllResponseHeaders()</h2>
        <h4> L'objet XMLHttpRequest </h4>

        <p> La fonction getAllResponseHeaders() renvoie toutes les informations d'en-tête d'une ressource, comme la longueur, le type de serveur, le type de contenu, la dernière modification, etc. </p>
        <div id = "myDIV">
            <p id = "demo1"></p>
        </div>
        <Button id="Button1" onclick="starDOc()">button</Button>
     <script>
        function starDOc(){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("demo1").innerHTML =
                this.getAllResponseHeaders();
             }
          };
          xhttp.open("GET", "../ajax_info.txt", true);
          xhttp.send();
        }
      </script>
    </body>
  </html>