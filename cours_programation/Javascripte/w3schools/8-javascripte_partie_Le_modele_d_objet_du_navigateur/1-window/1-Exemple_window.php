<! DOCTYPE html>
<html>
    <style>
#myDIV {
  background-color: coral;
  border: 1px solid;
  padding: 50px;
  color: white;
  font-size: 20px;
}
</style>
    <body>
        <h2> JavaScript  </h2>
        <div id = "myDIV">
            <p id = "demo1"></p>
        </div>
<script>
/*
   
L'exemple affiche la hauteur et la largeur de la fenêtre du navigateur: (sans les barres d'outils / barres de défilement)
  
*/
document.getElementById("myDIV").addEventListener("mousedown", mafonction);
function mafonction(){
   var longueur = window.innerWidth ||                   
       document.documentElement.clientWidth || 
       document.body.clientWidth;
    
   var largeur = window.innerHeight ||                   
       document.documentElement.clientHeight || 
       document.body.clientHeight;
    
    var dimensionner = document.getElementById("demo1");
    dimensionner.innerHTML = "longueur = "+longueur+" , largeur = "+largeur;
}
/*
Pour Internet Explorer 8, 7, 6, 5:

document.documentElement.clientHeight
document.documentElement.clientWidth

ou alors

document.body.clientHeight
document.body.clientWidth
Une solution JavaScript pratique (couvrant tous les navigateurs):

Autres méthodes de fenêtre
Quelques autres méthodes:

window.open () - ouvre une nouvelle fenêtre
window.close () - ferme la fenêtre courante
window.moveTo () - déplace la fenêtre actuelle
window.resizeTo () - redimensionne la fenêtre courante
*/
</script>
    </body>
</html>