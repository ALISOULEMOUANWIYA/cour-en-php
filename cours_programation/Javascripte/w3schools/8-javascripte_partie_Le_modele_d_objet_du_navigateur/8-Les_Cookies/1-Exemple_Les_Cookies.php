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
        <script>
            function setCookie(Cooki_nom, Cooki_valeur, exposer_jours){
                var durer = new Date();
                durer.setTime(durer.getTime() + (exposer_jours*24*60*60*1000));
                var expirations = "expires="+durer.toGMTString();
                document.cookie = Cooki_nom+"="+Cooki_valeur+";"+expirations+";path=/";
            }
            
            function getCookie(Cooki_nom){
                var nom = Cooki_nom+"=";
                var Cookie_decode = decodeURIComponent(document.cookie);
                var tableaux = Cookie_decode.split(';');
                for(var i = 0; i<tableaux.length; i++){
                    var tab = tableaux[i];
                    while(tab.charAt(0) == ' '){
                        tab = tab.substring(1);
                    }
                    if(tab.indexOf(nom) == 0){
                        return(tab.substring(nom.length, tab.length));
                    }
                }
                return("");
            }
            
            function verifierCookie(){
                var utilisateur = getCookie("username");
                if(utilisateur != ""){
                    alert("Bienvenue encors "+utilisateur);
                }else{
                    utilisateur = prompt("S'il vous plaît entrez votre nom:","");
                    if(utilisateur != "" && utilisateur != null){
                        setCookie("username",utilisateur, 30);
                    }
                }
            }
        </script>
    <body onload="verifierCookie()"> </body>
</html>