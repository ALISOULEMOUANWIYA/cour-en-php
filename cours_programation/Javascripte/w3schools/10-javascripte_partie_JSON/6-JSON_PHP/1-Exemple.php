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
        <h2> Le JavaScript client </h2>
        <div id = "myDIV">
            <p id="demo1"></p>
            <Button id="Button1" onclick="starDOc()">button</Button>
        </div>
        
     <script>
        function starDOc(){
            var textes = "";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if(this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                for(var i in myObj){
                  textes += myObj[i]+" ";  
                }
                document.getElementById("demo1").innerHTML = textes; 
              }
            };
            xmlhttp.open("GET", "fichier.php", true);
            xmlhttp.send();
        }
      </script>
    </body>
  </html>

