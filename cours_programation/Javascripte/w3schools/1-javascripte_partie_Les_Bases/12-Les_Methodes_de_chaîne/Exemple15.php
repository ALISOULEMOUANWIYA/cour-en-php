<!doctype html>
<html>     
    <body>
        <h2> Méthodes de chaîne JavaScript </h2>

        <p> Cliquez sur "Essayer" pour afficher le premier élément du tableau, après un fractionnement de chaîne. </p>
        <button onmouseover="MonFonction()" onmouseout="MonFonctionOut()">Survole</button>
        <p id="demo1"></p>
        <script>
            var d = new Date();
            year = d.getFullYear(); // obtenire l'anner
            
            var d = new Date();
            month = d.getMonth(); // obtenire le mois
            
            function MonFonction(){
                var str = "a,b,c,d,e,f";
                var arr = str.split(",");
                var txts = "";
                for(var i = 0; i<arr.length; i++){
                    txts += arr[i]+" ";
                }
                document.getElementById("demo1").innerHTML = txts+"ok";
            }
            function MonFonctionOut(){  document.getElementById("demo1").style.display = "none";
            }
            
            /*
             pop() : pour suprimer le dernier element  de la liste;
             spice(Number1, Number2): pour suprimer des element selon l'intervale choisie;
             push("element") : pour ajouter un element au debut de la liste
             sort() : permet d'arrager les elements par ordres alphabetique
             
             
             
            */
        </script>
    </body>    
</html>