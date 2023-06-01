"use strict";
class effectMusique{
    constructor(axer){
        this.clique = axer; 
    }
    starMusique(){
        const audioElement = document.getElementById("musicOver");
        audioElement.play();
        document.getElementById("alert0").innerHTML = "Ah!! tu as survoler cet carré";
     }
    clicker(){
        const audioB = document.getElementById("musicButon");
        audioB.play();
     }
   clickerInpup(){
     const audioElement = document.getElementById( "musicinput");
     audioElement.play();
   }
}
class contruction{
    constructor(){}
}


class Hasard extends effectMusique{
    constructor(axer, abscisseX, OrdonneY){
        super(axer);
        this.X = abscisseX;
        this.Y = OrdonneY;
    }
    Mafonction(compteur){
         this.clicker(); 
         var x =0;
         var y =0;
         var pos = 0;
         var elem = document.getElementById("animationB");
         var CHAMPS1 = document.getElementById("inp1");
         var CHAMPS2 = document.getElementById("inp2");
         var AbscisseP = document.getElementById("location1");
         var OrdonneP = document.getElementById("location2");
         var PoisitionXY = document.getElementById("listpoint");
         clearInterval(compteur);
         compteur = setInterval(Cadre, 10);
         function Cadre(){
             if(pos == 350){
                clearInterval(compteur);
             }else{
                pos++;
                x = Math.floor(Math.random() * (270)+15);
                y = Math.floor(Math.random() * (270)+15);
                CHAMPS1.value= Math.abs(x);
                CHAMPS2.value= Math.abs(y);

                document.getElementById("Coordonner1").innerHTML =Math.abs(x);
                document.getElementById("Coordonner2").innerHTML =Math.abs(y);

                 setTimeout(changer, 8500);
                 function changer(){   
                    elem.style.top = Math.abs(x)+"px";
                    elem.style.left = Math.abs(y)+"px"; 
                    elem.style.transition ="1.7s"; 
                    elem.style.background= "rgb(50 39 144 / 53%)";
                    elem.style.boxShadow ="1px 0px 9px 10px rgb(11 11 12 / 20%)";
                 }
                 AbscisseP.style.display="none";
                 OrdonneP.style.display="none";
                 document.getElementById("Point1").innerHTML =Math.abs(x);
                 document.getElementById("Point3").innerHTML =Math.abs(y);
                 PoisitionXY.style.top="15px";
                 document.getElementById("alert0").innerHTML=" Vous étes à une coordonnée de : A[ "+Math.abs(x)+" , "+Math.abs(y)+" ]";  
              }
        }            
      }
    static PasBon(valeurP){
       document.getElementById("inp1").value ="";  
       document.getElementById("inp2").value ="";  
       document.getElementById("alert0").innerHTML=" Enfaite : Vous avez une intevalle de [15 à 270] comme choix ";
     }
     modifficationCorder(){
         var elem = document.getElementById("animationB");
         var PoisitionXY = document.getElementById("listpoint");
         var AbscisseP = document.getElementById("location1");
         var OrdonneP = document.getElementById("location2");
         AbscisseP.style.display ="initial";
         document.getElementById("Coordonner1").innerHTML =this.X;
         document.getElementById("Coordonner2").innerHTML =this.Y;
         document.getElementById("alert0").innerHTML=" Vous étes à une coordonnée de : A[ "+this.X+" , "+this.Y+" ]";
         elem.style.top =this.X+"px";
         elem.style.left = this.Y+"px"; 
         elem.style.background= "rgb(50 39 144 / 53%)";
         elem.style.boxShadow ="1px 0px 9px 10px rgb(11 11 12 / 20%)";

         document.getElementById("Point1").innerHTML =this.X;
         document.getElementById("Point3").innerHTML =this.Y;
         PoisitionXY.style.position="relative";
         PoisitionXY.style.top=15+"px"; 
         
         
         AbscisseP.style.width =((this.Y))+"px";
         AbscisseP.style.right =((this.Y))+"px";
         
         OrdonneP.style.top =PoisitionXYOrd+"px"; 
         AbscisseP.style.transition ="1.7s"; 
     }
}
function rechercher(){
     var id = null;
     var salutation = "salut !,";

     var abscisseX = document.forms["MonForm"]["abscisse"].value;
     var OrdonneY = document.forms["MonForm"]["Ordonne"].value;
     var hasardement = new Hasard(salutation, abscisseX, OrdonneY);
    if(abscisseX == "" && OrdonneY == ""){
           hasardement.Mafonction(id);
    }else{
      if((abscisseX < 15 || abscisseX > 270) || (OrdonneY < 15 || OrdonneY > 270)){
             Hasard.PasBon();   
      }else{
        hasardement.modifficationCorder();
      }
    }
  return false;
}
function effecSonButton(){
  var abscisseX = document.forms["MonForm"]["abscisse"].value;
  var OrdonneY = document.forms["MonForm"]["Ordonne"].value;
  var hasardement = new Hasard("salut", abscisseX, OrdonneY);
  hasardement.starMusique();
}
function effecSonInput(){
  var abscisseX = document.forms["MonForm"]["abscisse"].value;
  var OrdonneY = document.forms["MonForm"]["Ordonne"].value;
  var hasardement = new Hasard("salut", abscisseX, OrdonneY);
  hasardement.clickerInpup();
}





