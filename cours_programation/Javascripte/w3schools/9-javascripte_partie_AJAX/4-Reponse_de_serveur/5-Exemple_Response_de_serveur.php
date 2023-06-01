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
    <h2> L'objet XMLHttpRequest </h2>

    <p> La fonction getResponseHeader() est utilisée pour renvoyer des informations d'en-tête spécifiques à partir d'une ressource, comme la longueur, le type de serveur, le type de contenu, la dernière modification, etc. </p>
        <div id = "myDIV">
            <p> Dernière modification: <span id = "demo1"> </span> </p>
        </div>
        <Button id="Button1" onclick="starDOc()">button</Button>
     <script>
        function starDOc(){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("demo1").innerHTML =
                this.getResponseHeader("Last-Modified");
             }
          };
          xhttp.open("GET", "../ajax_info.txt", true);
          xhttp.send();
        }
      </script>
    </body>
  </html>