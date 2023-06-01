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
           var obj = {
               "nom": "Ali Soule",
               "Prenom": "Mouanwiya",
               "age": 28,
               "ciy": "Moronie",
               "voiture":{
                   "voiture1":"Lambo",
                   "voiture2":"Ferarie",
                   "voiture3":"BMW"
               }
           };
            for(valeur in obj){    
               if(obj[valeur]== "[object Object]"){
                   document.getElementById("demo1").innerHTML += valeur+" : "+"<br>";
                   for(i in obj.voiture){
                     document.getElementById("demo1").innerHTML +="................"+obj.voiture[i]+"<br>";   
                   }
               }else{
                 document.getElementById("demo1").innerHTML += valeur+" : "+obj[valeur]+"<br>";  
               }
            }
        }
      </script>
    </body>
  </html>

