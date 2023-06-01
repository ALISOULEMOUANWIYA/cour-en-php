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
        <Button id="Button">returner à la page precedent </Button>
        <Button id="ButtonSUIV">Aller à la page suivante </Button>
<script>

document.getElementById("Button").addEventListener("mousedown", mafonction);
document.getElementById("ButtonSUIV").addEventListener("mousedown", mafonctionSUIV);
function mafonction(){
  window.history.back();
}
function mafonctionSUIV(){
  window.history.forward();
}
/*
history.back()- identique à un clic dans le navigateur
La méthode history.back() charge l'URL précédente dans la liste d'historique.
Cela revient à cliquer sur le bouton Retour dans le navigateur.
--------------------------------------------------------------

history.forward()- identique au clic suivant dans le navigateur 
La méthode history.forward() charge l'URL suivante dans la liste d'historique.

Cela revient à cliquer sur le bouton Suivant dans le navigateur.
*/
</script>
    </body>
</html>