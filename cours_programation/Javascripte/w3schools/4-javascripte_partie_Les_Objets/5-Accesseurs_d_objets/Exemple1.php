<!doctype html>
<html>     
    <body>
        <h2>Getter (le mot-clé get)</h2>
        <p id="demo">0</p>
        <p id="demo1"></p>
        <p id="demo3"></p>
        <script>
            'user strict';
            var personne = {
              Nom : "Ali soule",
              Prenom : "Mouanwiya",
              age : 27,
              coleuryeux : "Noir",
              PseudoNom : "Rachnel Keyz",
              language:"en",
              get lang(){
                  return(this.language);
              }
            };
            document.getElementById("demo").innerHTML = personne.lang;
        </script>
    </body>    
</html>