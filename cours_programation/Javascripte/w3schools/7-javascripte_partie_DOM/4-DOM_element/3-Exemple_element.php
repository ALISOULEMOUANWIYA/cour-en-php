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
            <p id = "demo1"> ça c'est une paragraphe </p>
            <p id = "demo2"> ça aussi l'est aussi </p>
        </div>
<script>
document.getElementById("myDIV").addEventListener("mousedown", mafonction);
function mafonction(){
  var paragEnfant = document.createElement("p");
  var neud = document.createTextNode("ça c'est encors un nouvau paragraphe");
  paragEnfant.appendChild(neud)
  var parent = document.getElementById("myDIV") 
  var enfent = document.getElementById("demo1");
  parent.replaceChild(paragEnfant, enfent);
  
    
//  element.appendChild(parag);
//  element.insertBefore(parag, apresparag);
//  element.removeChild(document.getElementById('demo2'));
}
</script>
    </body>
</html>