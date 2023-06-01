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
        table{
            color: aliceblue;
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
            <input type="text" onkeyup="starDOc(this.value)">
           </form>
        </div>
     <script>
        function starDOc(str){
          if(str.length == 0){
             document.getElementById('texteTapper').innerHTML=
             "";
              return;
          }else{
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                 document.getElementById('texteTapper').innerHTML=
                   this.responseText;
                 }
              };
              xhttp.open("GET", "controllers.php?q="+str, true);
              xhttp.send();   
          }
        }
      </script>
    </body>
  </html>