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
           var arr = ["John", "Ali soule", "Mouanwiya"]; 
           var obj = {
               nom: "Ali Soule",
               Prenom: "Mouanwiya",
               ciy: "Moronie",
               Age: function(){return(30);},
               today: new Date()
           };
            obj.Age = obj.Age.toString();
            var monJSON = JSON.stringify(obj);
            document.getElementById("demo1").innerHTML = monJSON;
        }
      </script>
    </body>
  </html>

