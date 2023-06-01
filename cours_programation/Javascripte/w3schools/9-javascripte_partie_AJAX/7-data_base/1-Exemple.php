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
           <div id="Tableau">
               
           </div>
        </div>
     <script>
        function starDOc(str){
          if(str.length == 0){
             document.getElementById('texteTapper').innerHTML=
             "Personne introuvable";
              return;
          }else{
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
//                 document.getElementById("Tableau").innerHTML=
//                   this.responseText;                 
                    document.getElementById("Tableau").innerHTML=
                   "<table><thead><tr><th>ID joueur</th><th>Prenom Joueur</th><th>nom Joueur</th><th>ÂGE Joueurt</th><th>Maillot Joueurt</th><th>Id club</th></tr></thead></table><tbody ><tr><td>12</td><td>Ali soule </td><td>Ali soule </td><td>Ali soule </td><td>Ali soule </td><td>Ali soule </td></tr></tbody>";
                 document.getElementById('texteTapper').innerHTML=
                   "Personne trouver";
                 }
              };
              xhttp.open("GET", "afficher.php?q="+str, true);
              xhttp.send();   
          }
        }
      </script>
    </body>
  </html>