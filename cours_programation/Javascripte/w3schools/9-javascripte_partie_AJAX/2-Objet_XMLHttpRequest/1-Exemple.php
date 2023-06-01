<! DOCTYPE html>
<html>
    <style>
#myDIV {
  background-color: #211f1f;
  border: 1px solid;
  padding: 50px;
  color: white;
  font-size: 20px;
}
</style>
    <body>
        <h2>Laisser AJAX modifier ce texte</h2>
        <div id = "myDIV">
            <p id = "demo1"></p>
        </div>
        <Button id="Button1" onclick="starDOc()">button</Button>
        <script>
        document.getElementById("Button1").addEventListener("click", starDOc);
           function starDOc(){
             var xhttp;
              if(window.XMLHttpRequest){
                 // code pour les navigateurs modernes
                 xhttp = new XMLHttpRequest();
               }else{
                 // code pour IE6, IE5
                 xhttp = new ActiveXObject("Microsoft.XMLHTTP");  
               }
               xhttp.onreadystatechange = function(){
                 if(this.readyState == 4 && this.status == 200){
                    document.getElementById("demo1").innerHTML = this.responseText;
                  }
               };
               xhttp.open("GET", "ajax_info.txt", true);
               xhttp.send();
           }
            
/*
new XMLHttpRequest()-: Crée un nouvel objet XMLHttpRequest;

abort()-: Annule la demande en cours;

getAllResponseHeaders()-: Renvoie les informations d'en-tête

getResponseHeader()-: Renvoie des informations d'en-tête spécifiques

open(method, url, async, user, psw)-: Spécifie la demande
method: le type de requête GET ou POST;
url: l'emplacement du fichier;
asynchrone: vrai (asynchrone) ou faux (synchrone);
user: nom d'utilisateur facultatif;
psw: mot de passe facultatif;

send()-: Envoie la requête au serveur Utilisé pour les demandes GET

send(string)-: Envoie la requête au serveur.
Utilisé pour les requêtes POST

setRequestHeader()-: Ajoute une paire label/value à l'en-tête à envoyer

----------------------------------------------------------------
onreadystatechange:- Définit une fonction à appeler lorsque la propriété readyState change

readyState:- Contient l'état de XMLHttpRequest.
                0: requête non initialisée
                1: connexion au serveur établie
                2: demande reçue
                3: traitement de la demande
                4: la demande est terminée et la réponse est prête

responseText:- Renvoie les données de réponse sous forme de chaîne

responseXML:- Renvoie les données de réponse sous forme de données XML

status Renvoie le numéro d'état d'une demande
                200: "OK"
                403: "Interdit"
                404: "Non trouvé"

statusText:- Renvoie le texte du statut (par exemple "OK" ou "Not Found")
*/
        </script>
    </body>
</html>