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
        <h2> Stringifier un objet JavaScript </h2>
        <div id = "myDIV">
            <p id="demo1"></p>
            <p id="demo2"></p>
            <Button id="Button1" onclick="starDOc()">button</Button>
        </div>
        
     <script>
        function starDOc(){
           var tableau = ["John", "Peter", "Sally", "Jane"];
           var obj = {
               "nom": "Ali Soule",
               "Prenom": "Mouanwiya",
               "age": function(){ return(30)},
               "ciy": "Moronie",
               "voiture":{
                   "voiture1":"Lambo",
                   "voiture2":"Ferarie",
                   "voiture3":"BMW"
               }
           };
            obj.age = obj.age.toString()
            var monObjet = JSON.stringify(obj);
            var monObjet1 = JSON.stringify(tableau);
            document.getElementById("demo1").innerHTML = monObjet;
            
            document.getElementById("demo2").innerHTML = monObjet1;
            
        }
      </script>
    </body>
  </html>

