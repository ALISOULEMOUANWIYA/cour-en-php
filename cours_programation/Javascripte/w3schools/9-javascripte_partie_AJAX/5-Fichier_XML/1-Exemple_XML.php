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
        table{
            color: aliceblue;
        }
     </style>
    </head>
    <body>
    <h2> L'objet XMLHttpRequest </h2>

    <p> </p>
        <div id = "myDIV">
           <table id="demo1"></table>
        </div>
        <Button id="Button1" onclick="starDOc()">button</Button>
     <script>
        function starDOc(){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                maFonction(this);
             }
          };
          xhttp.open("GET", "catalogue.xml", true);
          xhttp.send();
        }
        function maFonction(xml){
//          var Liste_tableau = document.createElement("table");
          var elements = document.getElementById("myDIV");
          /*-------------------*/
          var xmlFichier = xml.responseXML;
          var tableau ="<tr><th>Atricle</th><th>Titre</th></tr>";
          var x = xmlFichier.getElementsByTagName("CD");
          for(var i = 0; i < x.length; i++){
              tableau +="<tr><td>"+
              x[i].getElementsByTagName("ARTIST")[0]. childNodes[0].nodeValue+"</td><td>"+
              x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue+
              "</td></tr>"  
          }
//          elements.appendChild(Liste_tableau);
          document.getElementById("demo1").innerHTML=tableau;
        }
      </script>
    </body>
  </html>