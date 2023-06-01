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
            <p id = "demo2"></p>
            <p id = "demo3"></p>
            <p id = "demo4"></p>
            <p id = "demo5"></p>
        </div>
<script>
/*
   
L'exemple affiche la hauteur et la largeur de la fenêtre du navigateur: (sans les barres d'outils / barres de défilement)
  
*/
document.getElementById("myDIV").addEventListener("mousedown", mafonction);
function mafonction(){
    document.getElementById("demo1").innerHTML= "1- longueur = "+screen.width;
    document.getElementById("demo2").innerHTML= "2- largeur = "+screen.height;
    
    document.getElementById("demo3").innerHTML= "3- longueur = "+screen.availHeightwidth;
    document.getElementById("demo4").innerHTML= "4- largeur = "+screen.availWidthheight;
    document.getElementById("demo5").innerHTML= "Couleur = "+screen.colorDepth
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