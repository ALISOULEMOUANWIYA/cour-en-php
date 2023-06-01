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
        <h2> Objets JSON imbriqués </h2>
        <div id = "myDIV">
            <p id="demo1"></p>
            <Button id="Button1" onclick="starDOc()">button</Button>
        </div>
        
     <script>
        function starDOc(){
            var tableau = ""; 
           var obj = {
               "nom": "Ali Soule",
               "Prenom": "Mouanwiya",
               "age": 28,
               "ciy": "Moronie",
               "voiture":[
                   { "nomV":"Lambo","model":["Fiesta","Focus","Mustang"]},
                   {"nomV":"BMW","model":["320","X3","X5"]},
                   {"nomV":"Fiat","model":["500","Panda"]}
               ]
           };
            delete obj.voiture[0];
            for(var j in obj.voiture){    
                tableau +="<h3>"+obj.voiture[j].nomV+"</h3>";
                for(var i in obj.voiture[j].model){
                  tableau += obj.voiture[j].model[i]+"<br>";
                }
            }
            document.getElementById("demo1").innerHTML = tableau;
        }
      </script>
    </body>
  </html>

