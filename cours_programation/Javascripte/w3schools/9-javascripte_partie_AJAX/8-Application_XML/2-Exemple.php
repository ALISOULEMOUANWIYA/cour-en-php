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
           <form>
            <input type="button" onclick="precendent()" value="<<">
            <input type="Number" min="0" onkeyup="starDOc(this.value)" id="inputN">
            <input type="button" onclick="suvant()" value=">>">
           </form>

          <table id="Tableaux"></table>
        </div>
     <script>
        var i = 0, longueur;
        function starDOc(i){
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                  mafonction(this, i);
                 document.getElementById('texteTapper').innerHTML=
                   "Personne trouver";
                 }else{
                 document.getElementById('texteTapper').innerHTML=
                   "Personne introuvable";
                    document.getElementById("Tableaux").innerHTML="";
                 }
              };
              xhttp.open("GET", "catalogue.xml", true);
              xhttp.send();   
        }
        function mafonction(xml, i){
          var xmlficher = xml.responseXML;
          var tableau = "<tr><th>Artist</th><th>Title</th><th>Title</th></tr>";
          var x = xmlficher.getElementsByTagName("CD");
          longueur = x.length;
          document.getElementById("Tableaux").innerHTML =tableau+"<tr><td>"+
          x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue+"</td><td>"+
          x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue+"</td><td>"+
          x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue+"</td></tr>"; 
        }
        function suvant(){
            if(i < longueur - 1){
                i++;
                document.getElementById("inputN").value = i;
                starDOc(i);
            }
        }
        function precendent(){
            if(i > 0){
                i--;
                document.getElementById("inputN").value = i;
                starDOc(i);
            }
        }
      </script>
    </body>
  </html>