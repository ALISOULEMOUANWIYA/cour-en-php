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
        </div>
        <Button id="Button">clique</Button>
        <Button id="Button2">tester</Button>
        <Button id="Button3">verification</Button>
<script>

document.getElementById("Button").addEventListener("mousedown", mafonction);
document.getElementById("Button2").addEventListener("mousedown", mafonction2);
document.getElementById("Button3").addEventListener("mousedown", mafonction3);

function mafonction(){
    alert("je suis un boite d'alerte ");
}
    

function mafonction2(){
    var textes = "";
    if(confirm("Press a button!")){
        textes="You pressed OK";
    }else{
        textes="You pressed Cancel!";
    }
 document.getElementById("demo1").innerHTML=textes;   
}  
    
function mafonction3(){
    var textes = "";
    var persone = prompt("Veuillez entrer votre nom:")
    if(persone == null || persone == ""){
        textes= "L'utilisateur a annulé l'invite.";
    }else{
        textes="Salut "+persone+" comment allez vous aujourd'huit ?";
    }
 document.getElementById("demo1").innerHTML=textes;   
}
/*

*/
</script>
    </body>
</html>