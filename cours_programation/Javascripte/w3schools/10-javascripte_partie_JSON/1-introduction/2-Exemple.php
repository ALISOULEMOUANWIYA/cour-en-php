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
        <h2> Réception de données </h2>
        <div id = "myDIV">
            <p id="demo1"></p>
            <Button id="Button1" onclick="starDOc()">button</Button>
        </div>
        
     <script>
        function starDOc(){
          var monObjet = '{"Nom": "Ali","Prenom": "Mouanwiya",   "Age": 28,"City": "Moroni"}'; 
          var MonJSon = JSON.parse(monObjet);
          document.getElementById("demo1").innerHTML =
          MonJSon.Nom;
        }
      </script>
    </body>
  </html>