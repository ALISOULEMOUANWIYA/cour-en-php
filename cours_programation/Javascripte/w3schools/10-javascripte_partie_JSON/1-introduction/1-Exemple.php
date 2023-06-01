<! DOCTYPE html>
  <html>
  <head>
    <style>
        #myDIV {
/*          background-color: #211f1f;*/
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
            <Button id="Button1" onclick="starDOc()">button</Button>
        </div>
        
     <script>
        function starDOc(){
          var monObjet = {
            Nom: "Ali",   
            Prenom: "Mouanwiya",   
            Age: 28,   
            City: "Moroni",   
          }; 
          var MonJSon = JSON.stringify(monObjet);
          window.location = "fichier_PHP.php?x="+MonJSon.toString();
        }
      </script>
    </body>
  </html>