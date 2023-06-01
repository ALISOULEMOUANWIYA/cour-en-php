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
        <Button id="Button1" onclick="starDOc()">button</Button>
     <script>
        function starDOc(){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                  var xmlFichier = this.responseXML;
                  var textes = "";
                  var listes = xmlFichier.getElementsByTagName("ARTIST");
                  for (var i = 0; i < listes.length; i++) {
                   textes = textes + listes[i].childNodes[0].nodeValue + "<br>";
                  }
                  document.getElementById("demo1").innerHTML = textes;
             }
          };
          xhttp.open("GET", "cd_catalog.xml", true);
          xhttp.send();
        }
/*

*/
      </script>
    </body>
  </html>