<!doctype html>
<html> 
    <style>
        body{
            background: rgb(31 32 33 / 87%);
        }
        body h2{
            position: relative;
            width: 300px;
            top: 240px;
            left: 24%;
            font-weight: bold;
             color: beige;
            text-align: center;
        }
        .cadre{
            position: relative;
            top: 250px;
            left: 24%;
            width: 260px;
            height: 90px;
            background: #967171;
            margin: 0px 5px;
            border-radius: 10px;
            border-left-style: groove;
            border-right-style: groove;
            box-shadow:13px 8px 2px 3px rgb(126 126 150 / 40%);
            transition: 0.5s;
        }
        .cadre:hover{
            background: #2b2525;
            border-color: black;
            transition: 0.5s;
            box-shadow: -4px -2px 9px 3px rgb(0 0 255 / 20%);
            text-shadow: 0.1px 0.1px 5px black, 0 0 0.3em blue, 0 0 0.1em blue;
            color: white;
            font: 1.0em Georgia, serif;
        }
        #demo{
            position: relative;
            top: 10%;
            left: 8px;
            font-size: 20px;
            font-weight: bold;
            color: darkslategrey;
        }
        #demo input{
            text-align: center;
            display: initial;
            position: relative;
            top: 2px;
            height: 30px;
            border-radius: 20px;
        }
        .cadre p{
            text-align: center;
        }
    </style>
    <body>
        <h2> Les Forms </h2>
        <div class="cadre" id="cadre">
            <div id="demo">
                <form name="MonForm" action="" onsubmit="return rechercher()" method="post">
                    <input id="inp1" type="text" name="fname"   >
                    <input id="inp2" type="submit" value="Tester">
                </form>
            </div>
            <p id="alert">Veuillez saisir un nombre entre 1 et 10:</p>
        </div>
   <script>
     'use strict';
     class animation{
        constructor(reponse){
            this.joie = reponse;
        }
        reduir(joieTr){
          document.getElementById("inp1").style.top="2px";
          document.getElementById("inp2").style.top="2px";
          document.getElementById("cadre").style.height="90px";
          document.getElementById("inp1").value ="";  
          document.getElementById("alert").innerHTML=
          "BRAVOOOO !!! ("+this.joie+""+joieTr+" )";
        }
        grandire(){
          document.getElementById("inp1").style.top="-5px";
          document.getElementById("inp2").style.top="-5px";
          document.getElementById("cadre").style.height="98px"; 
          document.getElementById("inp1").value ="";  
          document.getElementById("alert").innerHTML=
        "il vous faut saisir un nombre qui est sur cet inteval = [1 a 10]";  
        }
        PasBon(valeurP){
          document.getElementById("inp1").style.top="-5px";
          document.getElementById("inp2").style.top="-5px";
          document.getElementById("cadre").style.height="95px";
          document.getElementById("inp1").value ="";  
          document.getElementById("alert").innerHTML=
        " certe, "+valeurP+" est sur [1 a 10], mais Ce n'est pas la valeur choisie";  
        }
        static erreurChamps(){
          document.getElementById("inp1").style.top="-5px";
          document.getElementById("inp2").style.top="-5px";
          document.getElementById("cadre").style.height="140px"; 
          document.getElementById("alert").innerHTML=
          "Si vous cliquez sur Soumettre, sans remplir le champ de texte, vous verrez toujour ce message d'erreur.";   
        }
     }
     class LogicJeux extends animation{
            constructor(reponse){
                super(reponse);
                this.valeur = reponse;
                this.valeurH = (Math.floor((Math.random() * 10) + 3)-2);
            }
            validerForm(){
              var x = this.valeur;
//            console.log(this.valeurH);
              if(isNaN(x) || x < 1 || x > 10){
                  this.grandire();  
               }else{
                  if(x != this.valeurH){
                    this.PasBon(this.valeur);   
                  }else{
                     this.reduir(" est la Valeur choisie sur cet inteval");
                  }
               }  
            }
            get reponseAn(){
                return(this.valeur);
            }
            set reponseAn(modification){
                this.valeur = modification;
            }
            
        }
     function rechercher(){
        var valeurD = document.forms["MonForm"]["fname"].value;
        var trouver = new LogicJeux(valeurD);
        if(valeurD == ""){ 
          LogicJeux.erreurChamps();
        }else{
          trouver.validerForm();
        }
       return false;
     }
    </script>
  </body>    
</html>