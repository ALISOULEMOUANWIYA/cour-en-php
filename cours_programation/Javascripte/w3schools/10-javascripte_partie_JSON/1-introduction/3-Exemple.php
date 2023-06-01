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
        <h2> Stocker des données </h2>
        <div id = "myDIV">
            <p id="demo1"></p>
            <Button id="Button1" onclick="starDOc()">button</Button>
        </div>
        
     <script>
        function starDOc(){
          // Stocker des données:
          var monObjet = {
           Nom: "Ali",
           Prenom: "Mouanwiya",
           Age: 28,
           City: [
               "Moronie",
               "Dakar",
               "Maroc"
           ]}; 
          var MonJSon = JSON.stringify(monObjet);
          localStorage.setItem("testerJSON",MonJSon);
            
          // Récupération des données:
          var text = localStorage.getItem("testerJSON");
          var obj = JSON.parse(text);
          document.getElementById("demo1").innerHTML =
          "je suis "+obj.Nom+" "+obj.Prenom+" de "+obj.City[0];
        }
      </script>
    </body>
  </html>