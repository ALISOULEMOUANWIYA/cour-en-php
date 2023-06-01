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
        <h2>GET Requests</h2>
         <p>Pour POST des données comme un formulaire HTML, ajoutez un en-tête HTTP avec setRequestHeader(). Spécifiez les données que vous souhaitez envoyer dans la méthode send ():</p>
        <div id = "myDIV">
            <p id = "demo1"></p>
        </div>
        <Button id="Button1" onclick="starDOc()">button</Button>
     <script>
        document.getElementById("Button1").addEventListener("click", starDOc);
        function starDOc(){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("demo1").innerHTML = this.responseText;
             }else{
              document.getElementById("demo1").innerHTML = "fichier non trouver";
             }
          };
          xhttp.open("POST", "../ajax_info.php", true);
          xhttp.setRequestHeader("content-type", "applicaton/x-www-form-urlencoded");
          xhttp.send("Nom=alisoule&prenom=Moauanwiya");
        }
/*
setRequestHeader(header, value):- Ajoute des header HTTP à la requête
header: spécifie le nom de l'header
value: spécifie la valeur de l'header
---------------------------------------------------------------------
open (methode, url, async) Spécifie le type de requête

methode: le type de requête: GET ou POST
url: l'emplacement du serveur (fichier)
asynchrone: vrai (asynchrone) ou faux (synchrone)
send() Envoie la requête au serveur (utilisé pour GET)
send(string) Envoie la requête au serveur (utilisé pour POST)

*/
      </script>
    </body>
  </html>