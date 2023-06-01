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
        <h2> JavaScript removeEventListener() </h2>
        <div id = "myDIV">
           <p> Cet élément div a un gestionnaire d'événements onmousemove qui affiche un nombre aléatoire chaque fois que vous déplacez votre souris dans ce champ orange. </p>
           <p> Cliquez sur le bouton pour supprimer le gestionnaire d'événements du div. </p>
           <button onclick = "removeHandler ()" id = "myBtn"> Supprimer </button>
        </div>

       <p id = "demo"> </p>


<script>
document.getElementById("myDIV").addEventListener("mousemove", mafonction);
function mafonction(){
  document.getElementById("demo").innerHTML= Math.random();
}
function removeHandler(){
  document.getElementById("myDIV").removeEventListener("mousemove", mafonction);
}
</script>
    </body>
</html>