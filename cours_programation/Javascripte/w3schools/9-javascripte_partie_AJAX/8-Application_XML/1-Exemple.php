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
        <h2> L'objet XMLHttpRequest </h2>
        <div id = "myDIV">
           <div id = "trouver">
               <p>Suggestions: <span id="texteTapper"></span></p>
           </div>
           <Button id="Button1" onclick="starDOc()">button</Button>
          <table id="Tableaux"></table>
        </div>
     <script>
        function starDOc(){
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                  mafonction(this)
                 document.getElementById('texteTapper').innerHTML=
                   "Personne trouver";
                 }else{
                 document.getElementById('texteTapper').innerHTML=
                   "Personne introuvable"; 
                 }
              };
              xhttp.open("GET", "catalogue.xml", true);
              xhttp.send();   
        }
        function mafonction(xml){
          var i;
          var xmlficher = xml.responseXML;
          var tableau = "<tr><th>Artist</th><th>Title</th></tr>";
          var x = xmlficher.getElementsByTagName("CD");
          for(i = 0; i < x.length; i++){
              tableau +="<tr><td>"+
              x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue+"</td><td>"+
              x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue+"</td></tr>";       
          }
          document.getElementById("Tableaux").innerHTML=tableau;
        } 
      </script>
    </body>
  </html>