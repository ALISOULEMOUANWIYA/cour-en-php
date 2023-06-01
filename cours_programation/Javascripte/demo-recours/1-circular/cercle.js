'use strict';
window.addEventListener("load", rotationCircle);
document.getElementById('incons_droite').addEventListener("click", CirculationDroite, true);
document.getElementById('incons_gauche').addEventListener("click", CirculationGauche, true);
document.getElementById('playe').addEventListener("click", playIntervalle, true);
document.getElementById('stoper').addEventListener("click", stopIntervalle, true);
/*=======================================================*/
var tableau = [];
var i, j, k, l=2;
var angles = 0;
var t, commencer;
/*-------------*/
var  parent1 = document.getElementById('layer-1');
var  parent2 = document.querySelectorAll(".label");
var  longueurDom = parent1.children[0].querySelectorAll("div").length;
/*-------------*/
for(i=0; i < longueurDom/4;  i++){
  tableau[i+1]=parent2[i].children[0].children[0].textContent.trim();
//  console.log(i);
}
/*==========================================================*/

class coloration{
     constructor(){}
    arreter(){
        if(commencer == 1){
            commencer = 0;
            angles = 0;
        }
        clearInterval(t);
    }
    parcourire(){
        commencer = 1;
        angles = 0;
        l=2;
        var dejaRecut = 0;
        t  = setInterval(this.couleur, 1000);
    }
    couleur(){
      var  el = document.getElementById('layer-1');
      var  NomUser = document.getElementById('userNom');
      var  elInteraction = el.children[0];
      let d = new Date();
      var tempscouler = d.getMilliseconds();
      if(l == 13){
            l=1;
      }
      if(tempscouler != 0){
         angles -= 30;
         NomUser.innerHTML=tableau[l];
//         NomUser.style.transition = 2+'s';
         elInteraction.style.transform = 'rotate('+(angles)+'deg)';
         el.style.backgroundImage = "linear-gradient(#2f3b8"+tempscouler+",#2f3b8eb0, blue)";
          l++;
      } 
    }
    get Nombre(){
        return(this.valeur);
    }
}
class circulation{
    constructor(id){
        this.id = id;
    }
    circle() {
        var el = document.getElementById(this.id);
        var elInteraction = el.children[0];
        var offsetRad = null;
        var targetRad = 0;
        var previousRad;
        var  NomUser = document.getElementById('userNom');
        NomUser.innerHTML=tableau[1];
        
        try {
            elInteraction.addEventListener('mousedown', down);
        }
        catch (err) {
            console.log("Interaction not found");
        }

        function down(event) {
            offsetRad = getRotation(event);
            previousRad = offsetRad;
            window.addEventListener('mousemove', move);
            window.addEventListener('mouseup', up);
        }

        function move(event) {

            var newRad = getRotation(event);
            targetRad += (newRad - previousRad);
            previousRad = newRad;
            elInteraction.style.transform = 'rotate(' + (targetRad / Math.PI * 180) + 'deg)';
        }

        function up() {
            window.removeEventListener('mousemove', move);
            window.removeEventListener('mouseup', up);
        }

        function getRotation(event) {
            var pos = mousePos(event, elInteraction);
            var x = pos.x - elInteraction.clientWidth * .5;
            var y = pos.y - elInteraction.clientHeight * .5;
            return Math.atan2(y, x);
        }

        function mousePos(event, currentElement) {
            var totalOffsetX = 0;
            var totalOffsetY = 0;
            var canvasX = 0;
            var canvasY = 0;

            do {
                totalOffsetX += currentElement.offsetLeft - currentElement.scrollLeft;
                totalOffsetY += currentElement.offsetTop - currentElement.scrollTop;
            }while (currentElement = currentElement.offsetParent);

            canvasX = event.pageX - totalOffsetX;
            canvasY = event.pageY - totalOffsetY;

            return {
                x: canvasX,
                y: canvasY
            };
        }
     }
    buttonDroite(id){
        
        var  NomUser = document.getElementById('userNom');
        var el = document.getElementById(id);
        var elInteraction = el.children[0];
        angles -= 30;
       if(j > 12){
            j=1;
            k=12;
            NomUser.innerHTML=tableau[j];
       }else{
           NomUser.innerHTML=tableau[j];
       }
        elInteraction.style.transform = 'rotate('+(angles)+'deg)';
        k = j-1;
        j++;
      }
      buttonGauche(id){
        var  NomUser = document.getElementById('userNom');
        var el = document.getElementById(id);
        var elInteraction = el.children[0];
        angles += 30;
        if(k == 0){
            k=12;
            j = 1;
            NomUser.innerHTML=tableau[k];
       }else{
           NomUser.innerHTML=tableau[k];
       }
        elInteraction.style.transform = 'rotate('+(angles)+'deg)';
        j=k+1;
        k--;
      }
}
class contruction{
    constructor(){}
}

function CirculationDroite(){
    var controller = new circulation("layer-1");
    stopIntervalle();
    controller.buttonDroite('layer-1');
}
function CirculationGauche(){
    var controller = new circulation("layer-1");
    stopIntervalle();
    controller.buttonGauche("layer-1");
}
function rotationCircle(){
    j = 2;
    k = 12;
    var controller = new circulation('layer-1');
    var colorerGride = new coloration();
    controller.circle();
}
function stopIntervalle(){
    var marcher = document.getElementById('playe');
        marcher.style.display="initial";
    var steperMarche = document.getElementById('stoper');
        steperMarche.style.display="none";
    var colorerGride = new coloration();
    colorerGride.arreter();
}
function playIntervalle(){
    var marcher = document.getElementById('playe');
        marcher.style.display="none";
    var steperMarche = document.getElementById('stoper');
        steperMarche.style.display="initial";
    var colorerGride = new coloration();
    colorerGride.parcourire();
}