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
        <h2> JavaScript  </h2>
        <div id = "myDIV">
            <p id = "demo1"></p>
            <p id = "demo2"></p>
            <p id = "demo3"></p>
            <p id = "demo4"></p>
            <p id = "demo5"></p>
            <p id = "demo6"></p>
            <p id = "demo7"></p>
            <p id = "demo8"></p>
            <p id = "demo9"></p>
            <p id = "demo10"></p>
        </div>
<script>
/*
   
L'exemple affiche la hauteur et la largeur de la fenêtre du navigateur: (sans les barres d'outils / barres de défilement)
  
*/
document.getElementById("myDIV").addEventListener("mousedown", mafonction);
function mafonction(){
    document.getElementById("demo1").innerHTML= "1- window.location.href = "+window.location.href;
    document.getElementById("demo2").innerHTML= "2- window.location.hostname = "+window.location.hostname;
    document.getElementById("demo3").innerHTML= "3- window.location.search = "+window.location.search;
    document.getElementById("demo4").innerHTML= "4- window.location.pathname = "+window.location.pathname;
    document.getElementById("demo5").innerHTML= "5-window.location.assign = "+window.location.assign;
    document.getElementById("demo6").innerHTML= "6-window.location.protocol = "+window.location.protocol;
    document.getElementById("demo7").innerHTML= "7-window.location.isPrototypeOf = "+window.location.isPrototypeOf;
    document.getElementById("demo8").innerHTML= "8-window.location.propertyIsEnumerable = "+window.location.propertyIsEnumerable;
    document.getElementById("demo9").innerHTML= "9-window.location.hasOwnProperty = "+window.location.hasOwnProperty;
    document.getElementById("demo10").innerHTML= "10-window.location.port = "+window.location.port;
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