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
        <Button id="Buttont">Changer</Button>
<script>

document.getElementById("Buttont").addEventListener("mousedown", mafonction);
function mafonction(){
  window.location.assign("http://localhost/javascripte/w3schools/8-javascripte_Le_modele_d_objet_du_navigateur/3-Emplacement_de_la_fenetre/1-Exemple_Emplacement_de_la_fenetre.php");
}
/*
window.location.href : renvoie le href (URL) de la page courante

window.location.hostname :  renvoie le nom de domaine de l'hôte Web
window.location.pathname :  renvoie le chemin et le nom de fichier de la page courante

window.location.protocol :  renvoie le protocole Web utilisé (http: ou https :)

window.location.assign() : charge un nouveau document    
*/
</script>
    </body>
</html>